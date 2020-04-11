const express = require('express')

let app = express(); // création de l'objet représentant notre application express
let port = 8080;
var bodyParser = require('body-parser');

var routeLogin=require('./routes/Login');
var routeEmployes=require('./routes/Employes');
var routeDelete=require('./Routes/Delete')
var routeUpdate=require('./Routes/Update')
var routeAddEmployes=require('./routes/Addemployes.js')

let opn= require('opn');
app.use(bodyParser.urlencoded({extended: true})) 

app.use(bodyParser.json());

app.use(express.static('public'))

// API Route
app.use(routeDelete);
app.use(routeUpdate);
app.use(routeLogin);
app.use(routeEmployes);
app.use(routeAddEmployes);

app.listen(port, () =>  { // ecoute du serveur sur le port 8080
    console.log('le serveur fonctionne !!')
});
//opn("http://localhost:8080/html/index.html")

