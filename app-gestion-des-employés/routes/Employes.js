var express = require('express');
const fs = require('fs');



let rawdata = fs.readFileSync('./Data/Employes.json');
var data = JSON.parse(rawdata);
 
module.exports = (function () {
    var api = express.Router();
    api.route("/Employes").get(function (req, res) {
    
        res.send({
            request: true,
            data
        });
        res.end();

    });
    return api;
})();