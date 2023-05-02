/*
 *    main.js
 *    Mastering Data Visualization with D3.js
 *    2.5 - Activity: Adding SVGs to the screen
 */

const svg = d3.select("#chart-area").append("svg")
	.attr("width", 400)
	.attr("height", 400)

const circle = svg.append("rect")
	.attr("x", 100)
	.attr("y", 100)
	.attr("width", 200)
	.attr("height", 200)
	.attr("fill", "blue")

