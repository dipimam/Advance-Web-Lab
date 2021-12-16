import "bootstrap/dist/css/bootstrap.min.css";
import React, { useState, useEffect } from "react";
import axios from "axios";
import "../assets/css/style.css";
import { useHistory } from "react-router";
import Top from "./Top";
import Sidenav from "./Sidenav";
import { useParams } from "react-router-dom";
import Table from "./Table";

const ProjectDetails = () => {
  const { email } = useParams();
  const history = useHistory();
  let [projects, setProjects] = useState([]);

  let [password, setPassword] = useState("");
  let [error, setError] = useState("");

  useEffect(() => {
    axios
      .get("/projectdetails/" + email)
      .then((resp) => {
        setProjects(resp.data);
        console.log(resp.data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  return (
    <div>
      <Sidenav></Sidenav>
      <div className="projectdetails-container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Amount</th>
              <th scope="col">Deadline</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            {projects.map((project) => (
              <tr id={project.p_id}>
                <td>{project.p_name}</td>
                <td>{project.p_description}</td>
                <td>{project.p_amount}</td>
                <td>{project.p_deadline}</td>
                <td>{project.p_status}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
};
export default ProjectDetails;
