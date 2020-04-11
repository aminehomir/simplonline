var express = require('express');
const fs = require('fs');


module.exports = (function() {
    var api = express.Router();
    api.route("/Addemployes").post(function(req, res) { 

                                               
                                                
                                                fs.readFile('Data/Employes.json', 'utf8', (err, jsonString) => {
                                                    if (err) {
                                                        console.log("File read failed:", err)
                                                        return
                                                    }
                                                data =JSON.parse(jsonString) ;
                                                //const { name,email,address,phone} = req.body;
                                               
                                                //Get parameters
                                                data.push(req.body/*{ID: data.length + 1,name: name,email: email,address: address,phone: phone}*/);
                                                //update file data Login.json
                                                dataUpdated=JSON.stringify(data,null,4);
                                                fs.writeFileSync('Data/Employes.json', dataUpdated);
                                              
                                                res.send({request:true,data});
                                                res.end();
                                                console.log('add employe saved !')

                                            }) 
    });
    return api;
})();