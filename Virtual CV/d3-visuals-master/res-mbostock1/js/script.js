var iMbostockIndex = 0;
var iIntervalSecond = 1;
var arrMbostockData = [];
var hAnimateTimer;
var width = window.innerWidth * 0.6;
var font = "10px";

$(window).ready(function(){
    $(".portfolio_button").height(width);
    $(".hovicon").css("margin-top", width / 2 + "px");
});

function myfunc_initdata() {
    arrMbostockData = [];
}

function myfunc_setdata(arrData) {
    arrMbostockData = arrData;
}

function showModal(){
    width = window.innerWidth * 0.6;
}

function hideModal(){
    width = window.innerWidth * 0.6;
    $(".portfolio_button").height(width);
}

$(document).on('click', 'button', function () {
    hideModal();
});

$(document).on('click', '.mfp-content', function (e) {
    if(!$('.mfp-with-anim').is(e.target) && $('.mfp-with-anim').has(e.target).length === 0)
        hideModal();
});

$( window ).resize(function() {
    width = window.innerWidth * 0.6;
    $(".portfolio_button").height(width);
    $(".hovicon").css("margin-top", width / 2 + "px");
});

function myfunc_adddata(data) {
    arrMbostockData[arrMbostockData.length] = data;
}

function myfunc_mbostock_animate(intervalSecond) {
    iIntervalSecond = intervalSecond;
    iMbostockIndex = 0;
    // callTimeout();
}

function myfunc_onAnimatedMbostock() {
    if (arrMbostockData.length > 0)
        myfunc_mbostock(null, arrMbostockData[iMbostockIndex++ % arrMbostockData.length]);
    
    callTimeout();
}

function callTimeout() {
    setTimeout(myfunc_onAnimatedMbostock, iIntervalSecond * 1000);
}

function myfunc_mbostock(error, classes) {
    if (error) throw error;

    var diameter = width,
        radius = diameter / 2,
        innerRadius = radius - 100;

    var cluster = d3.layout.cluster()
        .size([360, innerRadius])
        .sort(null)
        .value(function (d) { return d.size; });

    var bundle = d3.layout.bundle();

    var line = d3.svg.line.radial()
        .interpolate("bundle")
        .tension(.85)
        .radius(function (d) { return d.y; })
        .angle(function (d) { return d.x / 180 * Math.PI; });    

    var svg = d3.select(".mbostock2").append("svg")
        .attr("width", diameter)
        .attr("height", diameter)
      .append("g")
        .attr("transform", "translate(" + radius + "," + radius + ")scale(1,1)");

    var nodes = cluster.nodes(packageHierarchy(classes)),
        links = packageImports(nodes);

    svg.selectAll(".link")
        .data(bundle(links))
      .enter().append("path")
        .attr("class", "link")
        .attr("d", line);

    svg.selectAll(".node")
        .data(nodes.filter(function (n) { return !n.children; }))
      .enter().append("g")
        .attr("class", "node")
        .attr("transform", function (d) { return "rotate(" + (d.x - 90) + ")translate(" + d.y + ")"; })
      .append("text")
        .attr("dx", function (d) { return d.x < 180 ? 5 : -5; })
        .attr("dy", ".31em")
        .attr("text-anchor", function (d) { return d.x < 180 ? "start" : "end"; })
        .attr("transform", function (d) { return d.x < 180 ? null : "rotate(180)"; })
        .style("font-size",font)
        .text(function (d) { return d.key; });

    d3.select(self.frameElement).style("height", diameter + "px");
}
                  
// load data array //
myfunc_initdata();
myfunc_adddata(myData1);
myfunc_adddata(myData2);
myfunc_adddata(myData3);
// d3.json("res-mbostock1/json/data1.json", myfunc_adddata);
// d3.json("res-mbostock1/json/data2.json", myfunc_adddata);
// d3.json("res-mbostock1/json/data3.json", myfunc_adddata);
/////////////////////

// display data //
setTimeout(myfunc_mbostock_animate(1), 2000);
//////////////////

// Lazily construct the package hierarchy from class names.
function packageHierarchy(classes) {
    var map = {};

    function find(name, data) {
        var node = map[name], i;
        if (!node) {
            node = map[name] = data || { name: name, children: [] };
            if (name.length) {
                node.parent = find(name.substring(0, i = name.lastIndexOf(".")));
                node.parent.children.push(node);
                node.key = name.substring(i + 1);
            }
        }
        return node;
    }

    classes.forEach(function (d) {
        find(d.name, d);
    });

    return map[""];
}

// Return a list of imports for the given array of nodes.
function packageImports(nodes) {
    var map = {},
        imports = [];

    // Compute a map from name to node.
    nodes.forEach(function (d) {
        map[d.name] = d;
    });

    // For each import, construct a link from the source to target node.
    nodes.forEach(function (d) {
        if (d.imports) d.imports.forEach(function (i) {
            imports.push({ source: map[d.name], target: map[i] });
        });
    });

    return imports;
}