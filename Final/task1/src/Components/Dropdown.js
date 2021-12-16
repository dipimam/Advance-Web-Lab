import React from "react";

const Dropdown = () => {
  return (
    <ul>
      <li>
        <a href="#">Drop Down 1</a>
      </li>
      <li class="dropdown">
        <a href="#">
          <span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i>
        </a>
        <ul>
          <li>
            <a href="#">Deep Drop Down 1</a>
          </li>
          <li>
            <a href="#">Deep Drop Down 2</a>
          </li>
          <li>
            <a href="#">Deep Drop Down 3</a>
          </li>
          <li>
            <a href="#">Deep Drop Down 4</a>
          </li>
          <li>
            <a href="#">Deep Drop Down 5</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">Drop Down 2</a>
      </li>
      <li>
        <a href="#">Drop Down 3</a>
      </li>
      <li>
        <a href="#">Drop Down 4</a>
      </li>
    </ul>
  );
};
export default Dropdown;
