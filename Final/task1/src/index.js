import React from "react";
import ReactDOM from "react-dom";
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import Topnav from "./Components/Topnav";
import Hero from "./Components/Hero";
import Client from "./Components/Client";
import About from "./Components/About";
import Count from "./Components/Count";

ReactDOM.render(
  <React.StrictMode>
    <Topnav></Topnav>
    <Hero></Hero>
    <Client></Client>
    <About
      title="Voluptatem dignissimos provident quasi"
      shortdes="   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis
              aute irure dolor in reprehenderit"
    ></About>
  </React.StrictMode>,
  document.getElementById("root")
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
