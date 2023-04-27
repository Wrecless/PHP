// Define margins and dimensions for chart
const margin = { top: 20, right: 30, bottom: 30, left: 50 };
const width = 600 - margin.left - margin.right;
const height = 400 - margin.top - margin.bottom;

// Create SVG element for chart
const svg = d3
  .select('#chart')
  .append('svg')
  .attr('width', width + margin.left + margin.right)
  .attr('height', height + margin.top + margin.bottom)
  .append('g')
  .attr(
    'transform',
    'translate(' + margin.left + ',' + margin.top + ')'
  );

// Create scales for x and y axes
const x = d3.scaleTime().range([0, width]);
const y = d3.scaleLinear().range([height, 0]);

// Create line function for chart
const line = d3
  .line()
  .x((d) => x(new Date(d.date)))
  .y((d) => y(+d.price));

// Load data from database using D3
d3.json('includes/get-data.php').then((data) => {
  data.forEach((d) => {
    d.date = new Date(d.date);
    d.price = +d.price;
  });

  // Set domains for x and y scales based on data
  x.domain(d3.extent(data, (d) => d.date));
  y.domain(d3.extent(data, (d) => +d.price));

  // Add x-axis to chart
  svg
    .append('g')
    .attr('transform', 'translate(0,' + height + ')')
    .call(d3.axisBottom(x));

  // Add y-axis to chart
  svg.append('g').call(d3.axisLeft(y));

  // Add line to chart
  svg
    .append('path')
    .datum(data)
    .attr('class', 'line')
    .attr('d', line);
});
