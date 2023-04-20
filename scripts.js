function validateForm() {
  // Get form inputs
  const firstname = document.getElementById("firstName").value.trim();
  const lastname = document.getElementById("lastName").value.trim();
  const age = parseInt(document.getElementById("age").value.trim());
  const gender = document.querySelector('input[name="gender"]:checked')?.value;
  const address = document.getElementById("address").value.trim();
  const rollno = document.getElementById("rollNo").value.trim();
  const branch = document.getElementById("branch").value.trim();
  const year = parseInt(document.getElementById("year").value.trim());
  const result = parseFloat(document.getElementById("result").value.trim());
  const email = document.getElementById("email").value.trim();

  // Initialize error messages and status
  let isValid = true;
  const errors = {
    firstname: "",
    lastname: "",
    age: "",
    gender: "",
    address: "",
    rollno: "",
    branch: "",
    year: "",
    result: "",
    email: "",
  };

  // Validate first name
  if (!firstname) {
    errors.firstname = "First name is required";
    isValid = false;
  }

  // Validate last name
  if (!lastname) {
    errors.lastname = "Last name is required";
    isValid = false;
  }

  // Validate age
  if (!age || isNaN(age)) {
    errors.age = "Age is required and must be a number";
    isValid = false;
  } else if (age < 18 || age > 100) {
    errors.age = "Age must be between 18 and 100";
    isValid = false;
  }

  // Validate gender
  if (!gender) {
    errors.gender = "Gender is required";
    isValid = false;
  }

  // Validate address
  if (!address) {
    errors.address = "Address is required";
    isValid = false;
  }

  // Validate roll no
  if (!rollno) {
    errors.rollno = "Roll no is required";
    isValid = false;
  }

  // Validate branch
  if (!branch) {
    errors.branch = "Branch is required";
    isValid = false;
  }

  // Validate year
  if (!year || isNaN(year)) {
    errors.year = "Year is required and must be a number";
    isValid = false;
  } else if (year < 1 || year > 4) {
    errors.year = "Year must be between 1 and 4";
    isValid = false;
  }

  // Validate result
  if (!result || isNaN(result)) {
    errors.result = "Result is required and must be a number";
    isValid = false;
  } else if (result < 0 || result > 100) {
    errors.result = "Result must be between 0 and 100";
    isValid = false;
  }

  // Validate email
  const emailRegex = /^\S+@\S+\.\S+$/;
  if (!emailRegex.test(email)) {
    errors.email = "Email is invalid";
    isValid = false;
  }

  // Display error messages or submit form
  if (isValid) {
    return true;
  } else {
    document.getElementById("firstNameError").textContent = errors.firstname;
    document.getElementById("lastNameError").textContent = errors.lastname;
    document.getElementById("ageError").textContent = errors.age;
    document.getElementById("genderError").textContent = errors.gender;
    document.getElementById("addressError").textContent = errors.address;
    document.getElementById("rollnoError").textContent = errors.rollno;
    document.getElementById("branchError").textContent = errors.branch;
    document.getElementById("yearError").textContent = errors.year;
  }
}
