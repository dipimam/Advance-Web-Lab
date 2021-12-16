import "bootstrap/dist/css/bootstrap.min.css";
import React, { useState, useEffect } from "react";
import axios from "axios";
import "../assets/css/style.css";
import { useHistory } from "react-router";
import Top from "./Top";

const Signin = () => {
  const history = useHistory();
  let [token, setToken] = useState("");
  let [email, setEmail] = useState("");
  let [password, setPassword] = useState("");
  let [error, setError] = useState("");

  const loginSubmit = () => {
    var obj = { i_email: email, i_password: password };

    axios
      .post("/login", obj)
      .then((resp) => {
        var token = resp.data;
        var user = { email: token.email, access_token: token.token };
        localStorage.setItem("user", JSON.stringify(user));
        console.log(localStorage.getItem("user"));
        console.log(resp.data);
        if (token.token != null) {
          history.push("/Dashboard");
        } else {
          setError("Invalid Username or Password");
        }

        //setPosts(resp.data);
      })
      .catch((err) => {
        console.log(err);
        console.log(email);
      });
  };

  return (
    <div>
      <Top></Top>
      <div className="signin-container">
        <form>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              Email:
            </label>
            <input
              className="form-control form-control-lg"
              type="text"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
            />
          </div>

          <div class="form-outline">
            <label class="form-label" for="formControlDefault">
              Password:
            </label>
            <input
              className="form-control form-control-lg"
              type="password"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
            />
          </div>
        </form>
        <br></br>
        <button className="btn btn-primary" onClick={loginSubmit}>
          Login
        </button>
        <br />
        <br />
        {error ? <div className="alert alert-danger">{error}</div> : ""}
      </div>
    </div>
  );
};
export default Signin;
