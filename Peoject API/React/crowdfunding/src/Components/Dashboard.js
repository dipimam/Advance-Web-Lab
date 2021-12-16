import React from "react";
import "../assets/css/dashboard.css";
import { Link } from "react-router-dom";
import { useState, useEffect } from "react/cjs/react.development";
import Logout from "./Logout";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import Sidenav from "./Sidenav";

const Dashboard = () => {
  return (
    <div>
      <Sidenav></Sidenav>
      hello
    </div>
  );
};
export default Dashboard;
