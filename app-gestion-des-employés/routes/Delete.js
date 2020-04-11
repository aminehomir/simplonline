var express = require('express');
const fs = require('fs');


module.exports = (function() {
    var api = express.Router();
    api.route("/Delete").delete((req,res)=>{   
     
        
                                                
                                                fs.readFile('Data/Employes.json', 'utf8', (err, jsonString) => {
                                                    if (err) {
                                                        console.log("File read failed:", err)
                                                        return
                                                    }
                                                data =JSON.parse(jsonString) ;
                                             
                                                data.splice(req.body.index,1);
                                                //update file data Login.json
                                                dataUpdated=JSON.stringify(data);
                                                fs.writeFileSync('Data/Employes.json', dataUpdated);
                                              
                                                res.send({request:true,data});
                                                res.end();
                                                console.log('delete')

                                            }) 
    
    });
    return api;
})();