import "bootstrap/dist/css/bootstrap.min.css";
import React, { useState, useEffect } from "react";
import axios from "axios";
import "../assets/css/style.css";
import { useHistory } from "react-router";
import Top from "./Top";
import Dashboard from "./Dashboard";
import Sidenav from "./Sidenav";

const AddProject = () => {
  const history = useHistory();

  let [email, setEmail] = useState("");
  let [description, setDescription] = useState("");
  let [title, setTitle] = useState("");
  let [amount, setAmount] = useState("");

  let [deadline, setDeadline] = useState("");

  let [hasError, setHasError] = useState(true);

  let [password, setPassword] = useState("");
  let [error, setError] = useState("");

  useEffect(() => {
    if (localStorage.getItem("user")) {
      var obj = JSON.parse(localStorage.getItem("user"));
      setEmail(obj.email);
    }
  }, []);

  const AddSubmit = () => {
    if (title == "") {
      setTitleError("Title is required");
      setHasError(true);
    } else {
      if (title.length < 10) {
        setTitleError("Title atleast contain 10 letters");
        setHasError(true);
      } else {
        setTitleError("");
        setHasError(false);
      }
    }

    if (description == "") {
      setDescriptionError("Description is required");
      setHasError(true);
    } else {
      if (description.length < 30) {
        setDescriptionError("Description atleast contain 30 letters");
        setHasError(true);
      } else {
        setDescriptionError("");
        setHasError(false);
      }
    }

    if (amount == "") {
      setAmountError("Amount is required");
      setHasError(true);
    } else {
      if (amount > 100000) {
        setAmountError("Amount should be less than 100000");
        setHasError(true);
      } else if (amount < 100) {
        setAmountError("Amount should not be less than 100");
        setHasError(true);
      } else {
        setAmountError("");
        setHasError(false);
      }
    }

    if (deadline == "") {
      setDeadlineError("Amount is required");
      setHasError(true);
    } else {
      setDeadlineError("");
      setHasError(false);
    }

    if (!hasError) {
      var obj = {
        p_name: title,
        p_description: description,
        p_amount: amount,
        p_deadline: deadline,
        p_email: email,
      };

      console.log(obj);

      axios
        .post("/addproject", obj)
        .then((resp) => {
          console.log(resp.data);
          history.push("/projectdetails/" + email);
        })
        .catch((err) => {
          console.log(err);
        });
    }
  };

  //Validation part

  let [titleError, setTitleError] = useState("");
  let [descriptionError, setDescriptionError] = useState("");
  let [amountError, setAmountError] = useState("");
  let [deadlineError, setDeadlineError] = useState("");

  const validateTitle = (e) => {
    setTitle(e.target.value);
    if (title == "") {
      setTitleError("Title is required");
    } else {
      if (title.length < 10) {
        setTitleError("Title atleast contain 10 letters");
      } else {
        setTitleError("");
      }
    }

    console.log(e.target.value);
    console.log(titleError);
  };

  const validateDescription = (e) => {
    setDescription(e.target.value);
    if (description == "") {
      setDescriptionError("Description is required");
    } else {
      if (description.length < 30) {
        setDescriptionError("Description atleast contain 30 letters");
      } else {
        setDescriptionError("");
      }
    }
  };

  const validateAmount = (e) => {
    setAmount(e.target.value);
    if (amount == "") {
      setAmountError("Amount is required");
    } else {
      if (amount > 100000) {
        setAmountError("Amount should be less than 100000");
      } else if (amount < 100) {
        setAmountError("Amount should not be less than 100");
      } else {
        setAmountError("");
      }
    }
    console.log(e.target.value);
    console.log(amountError);
  };

  const validateDeadline = (e) => {
    setDeadline(e.target.value);
    if (deadline == "") {
      setDeadlineError("Amount is required");
    } else {
      setDeadlineError("");
    }

    console.log(e.target.value);
    console.log(amountError);
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
              onChange={validateTitle}
            />
            {titleError ? (
              <div className="alert alert-danger">{titleError}</div>
            ) : (
              ""
            )}
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea2">Description:</label>
            <textarea
              class="form-control rounded-0"
              id="exampleFormControlTextarea2"
              rows="5"
              value={description}
              onChange={validateDescription}
            ></textarea>
            {descriptionError ? (
              <div className="alert alert-danger">{descriptionError}</div>
            ) : (
              ""
            )}
          </div>

          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              Amount:
            </label>
            <input
              className="form-control form-control-lg"
              type="number"
              value={amount}
              onChange={validateAmount}
            />
            {amountError ? (
              <div className="alert alert-danger">{amountError}</div>
            ) : (
              ""
            )}
          </div>
          <div class="form-outline">
            <label class="form-label" for="formControlLg">
              Deadline:
            </label>
            <input
              className="form-control form-control-lg"
              type="date"
              value={deadline}
              onChange={validateDeadline}
            />
            {deadlineError ? (
              <div className="alert alert-danger">{deadlineError}</div>
            ) : (
              ""
            )}
          </div>
        </form>
        <br></br>
        <button className="btn btn-primary" onClick={AddSubmit}>
          Add
        </button>
        <br />
        <br />
        {error ? <div className="alert alert-danger">{error}</div> : ""}
      </div>
    </div>
  );
};
export default AddProject;
