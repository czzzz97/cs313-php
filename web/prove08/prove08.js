var http = require('http');
var url = require('url');

http.createServer(function (req, res) {
  
	if (req.url == "/home"){
		res.writeHead(200, {'Content-Type': 'text/html'});  
		res.end("<h1>Welcome to the Home Page!</h1>");
		}
	else if (req.url == "/getData"){
		res.write('{"name":"Corbin Hughes, "class":"cs313"}');
		res.end();
		}
	else {
		res.writeHead(404, {'Content-Type': 'text/html'});  
		res.end("<p>Page Not Found</p>");
		}
}).listen(8888);

/*	if (request == "/home"){
		result.writeHead(200, {'Content-Type': 'text/html'});
		result.end("<h1>Welcome to the Home Page!</h1>");
	}
	else if (request == "/getData"){
		result.write('{"name":"Corbin Hughes, "class":"cs313"}');
		result.end();
	}
}).listen(8888);*/