import React from "react";
import Dropdown from "./Dropdown";

const Topnav = () => {
  return (
    <div class="container d-flex align-items-center justify-content-between">
      <h1 className="logo">
        <a href="#">Baker</a>
      </h1>

      <a href="index.html" class="logo">
        <img src="assets/img/logo.png" alt="" class="img-fluid" />
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="nav-link scrollto active" href="#hero">
              Home
            </a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#about">
              About
            </a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#services">
              Services
            </a>
          </li>
          <li>
            <a class="nav-link scrollto " href="#portfolio">
              Portfolio
            </a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#team">
              Team
            </a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#pricing">
              Pricing
            </a>
          </li>
          <li class="dropdown">
            <a href="#">
              <span>Drop Down</span> <i class="bi bi-chevron-down"></i>
            </a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#contact">
              Contact
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  );
};
export default Topnav;
