var express = require('express');
const fs = require('fs');


module.exports = (function() {
    var api = express.Router();
    api.route("/Update").post(function(req, res) { 

                                              
                                                
                                                fs.readFile('Data/Employes.json', 'utf8', (err, jsonString) => {
                                                    if (err) {
                                                        console.log("File read failed:", err)
                                                        return
                                                    }
                                                data = JSON.parse(jsonString);
                                               
                                             
                                                data[req.body.index]=req.body.tache;
                                                //update file data Login.json
                                                dataUpdated=JSON.stringify(data,null,4);
                                                fs.writeFileSync('Data/Employes.json', dataUpdated);
                                            
                                                res.send({request:true,data});
                                                res.end();
                                                console.log('update saved !')


                                            }) 
    });
    return api;
})();