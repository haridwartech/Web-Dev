// const http = require("http");
import http from "https" ;

// const gfName = require("./feature")  //using the module...
// import gfName, {gfName2,gfName3} from "./feature.js" ; // we can use the object also
import * as myObj from "./feature.js"

// import {gfName2, gfName3} from "./feature.js"  //It can  import with default also

console.log(myObj.default) ;

// const server = http.createServer((req, res)=>{
//     console.log(req.url) ;
// });
// const server = http.createServer((req, res)=>{
//     res.end("<h1>Noise</h1>");
// });
const server = http.createServer((req, res) => {
    if (req.url === "/about") {
        res.end("<h1>About Page</h1>");
    }
    else if (req.url === "/") {
        res.end("<h1>Home Page</h1>");
    }
    else if (req.url === "/contact") {
        res.end("<h1>Contact Page</h1>");
    }
    else {
        res.end("<h1>Page not found</h1>");
    }
});

server.listen(5000, () => {
    console.log("Server is working");
});

