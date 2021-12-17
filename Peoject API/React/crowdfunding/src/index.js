import React from "react";
import ReactDOM from "react-dom";

import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import axios from "axios";

import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import Signin from "./Components/Signin";
import Logout from "./Components/Logout";
import Dashboard from "./Components/Dashboard";
import ProjectDetails from "./Components/ProjectDetails";
import EditProjectDetails from "./Components/EditProjectDetails";
import AddProject from "./Components/AddProject";
import Donations from "./Components/Donations";
import Reviews from "./Components/Reviews";

var token = null;

if (localStorage.getItem("user")) {
  var obj = JSON.parse(localStorage.getItem("user"));
  token = obj.access_token;
  console.log(token);
}

axios.defaults.headers.common["Authorization"] = token;

ReactDOM.render(
  <React.StrictMode>
    <Router>
      <Switch>
        <Route exact path="/Signin">
          <Signin />
        </Route>
        <Route exact path="/Logout">
          <Logout />
        </Route>
        <Route exact path="/Dashboard">
          <Dashboard />
        </Route>
        <Route exact path="/ProjectDetails/:email">
          <ProjectDetails></ProjectDetails>
        </Route>
        <Route exact path="/EditProjectDetails/:id">
          <EditProjectDetails></EditProjectDetails>
        </Route>
        <Route exact path="/AddProject">
          <AddProject></AddProject>
        </Route>
        <Route exact path="/Donations/:id">
          <Donations></Donations>
        </Route>
        <Route exact path="/Reviews/:id">
          <Reviews></Reviews>
        </Route>
      </Switch>
    </Router>
  </React.StrictMode>,
  document.getElementById("root")
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
