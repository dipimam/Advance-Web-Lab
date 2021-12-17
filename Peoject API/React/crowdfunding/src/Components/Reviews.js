import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import { useHistory } from "react-router";
import Sidenav from "./Sidenav";
import axios from "axios";
import { Link } from "react-router-dom";

const Reviews = () => {
  const history = useHistory();
  const { id } = useParams();
  let [email, setEmail] = useState("");
  let [reviews, setReviews] = useState([]);
  let [sum, setSum] = useState(0);
  let [deleteId, setDeleteId] = useState();

  useEffect(() => {
    if (localStorage.getItem("user")) {
      var obj = JSON.parse(localStorage.getItem("user"));
      setEmail(obj.email);
    }

    axios
      .get("/reviews/" + id)
      .then((resp) => {
        setReviews(resp.data);

        console.log(resp.data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  const deleteSubmit = (e) => {
    setDeleteId(e.target.value);

    axios
      .get("/deletereviews/" + e.target.value)
      .then((resp) => {
        window.location.reload();
      })
      .catch((err) => {
        console.log(err);
      });
  };

  return (
    <div>
      <Sidenav></Sidenav>
      <div className="donation-container">
        {reviews.map((review) => (
          <div className="review-container" id={review.r_id}>
            <p className="review-name">{review.donor.d_name}</p>
            <p className="review-comment">{review.comment}</p>
            <p className="review-time">
              {review.time}
              <button
                className="btn btn-danger delete-button"
                value={review.r_id}
                onClick={deleteSubmit}
              >
                Delete
              </button>
            </p>
          </div>
        ))}
      </div>
    </div>
  );
};

export default Reviews;
