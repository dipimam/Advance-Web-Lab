import react from "react";
import { useParams } from "react-router-dom";
import React, { useState, useEffect } from "react";
import "bootstrap/dist/css/bootstrap.min.css";

import axios from "axios";
import "../assets/css/style.css";
import { useHistory } from "react-router";
import Sidenav from "./Sidenav";

const EditProjectDetails = () => {
  const { id } = useParams();
  const history = useHistory();
  let [email, setEmail] = useState("");
  let [description, setDescription] = useState("");
  let [title, setTitle] = useState("");
  let [amount, setAmount] = useState("");
  let [error, setError] = useState("");
  let [deadline, setDeadline] = useState("");

  useEffect(() => {
    if (localStorage.getItem("user")) {
      var obj = JSON.parse(localStorage.getItem("user"));
      setEmail(obj.email);
    }

    axios
      .get("/getprojectdetails/" + id)
      .then((resp) => {
        setDescription(resp.data[0].p_description);
        setTitle(resp.data[0].p_name);
        setAmount(resp.data[0].p_amount);
        setDeadline(resp.data[0].p_deadline);

        console.log();
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  const EditSubmit = () => {
    var obj = {
      p_id: id,
      p_name: title,
      p_description: description,
      p_amount: amount,
      p_deadline: deadline,
    };
    console.log(obj);
    axios
      .post("/changeprojectdetails", obj)
      .then((resp) => {
        history.push("/projectdetails/" + email);
        console.log(resp.data);
      })
      .catch((err) => {
        console.log(err);
      });
  };

  return (
    <div>
      <Sidenav></Sidenav>
      <div className="signin-container">
        <form>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              Title
            </label>
            <input
              className="form-control form-control-lg"
              type="text"
              value={title}
              onChange={(e) => setTitle(e.target.value)}
            />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea2">Description:</label>
            <textarea
              class="form-control rounded-0"
              id="exampleFormControlTextarea2"
              rows="5"
              value={description}
              onChange={(e) => setDescription(e.target.value)}
            ></textarea>
          </div>

          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              Amount:
            </label>
            <input
              className="form-control form-control-lg"
              type="number"
              value={amount}
              onChange={(e) => setAmount(e.target.value)}
            />
          </div>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              Deadline:
            </label>
            <input
              className="form-control form-control-lg"
              type="date"
              value={deadline}
              onChange={(e) => setDeadline(e.target.value)}
            />
          </div>
        </form>
        <br></br>
        <button className="btn btn-primary" onClick={EditSubmit}>
          Confirm
        </button>
        <br />
        <br />
        {error ? <div className="alert alert-danger">{error}</div> : ""}
      </div>
    </div>
  );
};
export default EditProjectDetails;
