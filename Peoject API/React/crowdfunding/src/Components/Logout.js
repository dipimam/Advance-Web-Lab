import React, { useState, useEffect } from "react";
import { useHistory } from "react-router";

const Logout = () => {
  let history = useHistory();
  let [count, setCount] = useState(0);
  let [demo, setdemo] = useState(-10000);

  useEffect(() => {
    localStorage.removeItem("user");
    history.push("/Signin");
  }, []);

  return <div>Logout</div>;
};

export default Logout;
