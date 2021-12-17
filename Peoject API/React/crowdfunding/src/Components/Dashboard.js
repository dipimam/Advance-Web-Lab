import React from "react";
import "../assets/css/dashboard.css";
import "../assets/css/counter.css";
import { Link } from "react-router-dom";
import { useState, useEffect } from "react/cjs/react.development";
import Logout from "./Logout";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import Sidenav from "./Sidenav";
import { useHistory } from "react-router";

import axios from "axios";

const Dashboard = () => {
  let [countReviews, setCountReviews] = useState(0);
  let [countDonations, setCountDonations] = useState(0);
  let [countAmount, setCountAmount] = useState(0);
  const history = useHistory();

  useEffect(() => {
    axios
      .get("/allreviews/")
      .then((resp) => {
        setCountReviews(resp.data.length);
      })
      .catch((err) => {
        console.log(err);
      });

    axios
      .get("/alldonationhistory")
      .then((resp) => {
        setCountDonations(resp.data.length);
        resp.data.forEach(
          (element) =>
            (countAmount = parseInt(countAmount) + parseInt(element.amount))
        );
        setCountAmount(countAmount);
        console.log(countAmount);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  if (localStorage.getItem("user")) {
    return (
      <div>
        <Sidenav></Sidenav>
        <div class="container">
          <div class="row">
            <div class="four col-md-3">
              <div class="counter-box">
                {" "}
                <i class="fa fa-group"></i>{" "}
                <span class="counter">{countReviews}</span>
                <p>Reviews</p>
              </div>
            </div>
            <div class="four col-md-3">
              <div class="counter-box">
                {" "}
                <i class="fa fa-shopping-cart"></i>{" "}
                <span class="counter">{countDonations}</span>
                <p>Donations</p>
              </div>
            </div>
            <div class="four col-md-3">
              <div class="counter-box">
                {" "}
                <i class="fa fa-shopping-cart"></i>{" "}
                <span class="counter">{countAmount}</span>
                <p>Total Amount</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  } else {
    return <div>You cannot access this page.</div>;
  }
};
export default Dashboard;
