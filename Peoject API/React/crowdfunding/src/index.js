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

var token = null;

if (localStorage.getItem("user")) {
  var obj = JSON.parse(localStorage.getItem("user"));
  token = obj.access_token;
}
//axios.defaults.baseURL = "https://localhost:44372/";
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
      </Switch>
    </Router>
  </React.StrictMode>,
  document.getElementById("root")
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
