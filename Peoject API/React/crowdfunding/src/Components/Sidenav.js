import React from "react";
import "../assets/css/dashboard.css";
import { Link } from "react-router-dom";
import { useState, useEffect } from "react/cjs/react.development";
import Logout from "./Logout";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";

const Sidenav = () => {
  let [email, setEmail] = useState("");

  useEffect(() => {
    if (localStorage.getItem("user")) {
      var obj = JSON.parse(localStorage.getItem("user"));
      setEmail(obj.email);
    }
  }, []);

  return (
    <div className="top-container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <Link className="navbar-brand" to="/">
          CrowdFunding
        </Link>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <Link className="nav-link" to="/Dashboard">
                Dashboard
              </Link>
            </li>
            <li class="nav-item">
              <a className="nav-link" href={"/ProjectDetails/" + email}>
                Projects
              </a>
            </li>

            <li class="nav-item">
              <Link className="nav-link" to="/Logout">
                Logout
              </Link>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  );
};
export default Sidenav;
