import "bootstrap/dist/css/bootstrap.min.css";
import React, { useState, useEffect } from "react";
import axios from "axios";
import "../assets/css/style.css";
import { useHistory } from "react-router";
import Top from "./Top";
import Sidenav from "./Sidenav";
import { Link, useParams } from "react-router-dom";

const ProjectDetails = () => {
  const { email } = useParams();
  const history = useHistory();
  let [projects, setProjects] = useState([]);

  let [password, setPassword] = useState("");
  let [search, setSearch] = useState("");
  let [error, setError] = useState("");

  useEffect(() => {
    axios
      .get("/projectdetails/" + email)
      .then((resp) => {
        setProjects(resp.data);
        console.log(projects);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  const searchSubmit = () => {
    var obj = { search: search, email: email };

    axios
      .post("/searchproject", obj)
      .then((resp) => {
        console.log(resp.data);

        if (resp.data.length != 0) {
          setProjects(resp.data);
          setError("");
        } else {
          setProjects(resp.data);
          setError("No data found");
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
      <Sidenav></Sidenav>
      <div className="projectdetails-container">
        <Link class="btn btn-success pull-right add-product" to={"/AddProject"}>
          Add Project
        </Link>

        <div class="input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="Search"
            aria-label="Recipient's username"
            aria-describedby="basic-addon2"
            value={search}
            onChange={(e) => setSearch(e.target.value)}
          />
          <div class="input-group-append">
            <button
              class="btn btn-outline-secondary"
              type="button"
              onClick={searchSubmit}
            >
              Search
            </button>
          </div>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Amount</th>
              <th scope="col">Deadline</th>
              <th scope="col">Status</th>
              <th scope="col"></th>
              <th scope="col">Actions</th>
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
                <td>
                  <Link
                    className="btn btn-primary"
                    to={"/EditProjectDetails/" + project.p_id}
                  >
                    Edit
                  </Link>
                </td>
                <td>
                  {project.p_status == "approved" ? (
                    <Link
                      className="btn btn-success"
                      to={"/Donations/" + project.p_id}
                    >
                      Donations
                    </Link>
                  ) : (
                    ""
                  )}
                </td>
                <td>
                  {project.p_status == "approved" ? (
                    <Link
                      className="btn btn-info"
                      to={"/Reviews/" + project.p_id}
                    >
                      Reviews
                    </Link>
                  ) : (
                    ""
                  )}
                </td>
              </tr>
            ))}
          </tbody>
        </table>
        {error ? <div className="alert alert-danger">{error}</div> : ""}
      </div>
    </div>
  );
};
export default ProjectDetails;
