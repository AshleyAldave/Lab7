function password_verification(){
    var password_one = document.getElementById("password_one").value;
    var password_two = document.getElementById("password_two").value;

    if (password_one.length < 8){
        alert("First password is less than 8 characters long.")
    } else if(password_two.length < 8){
        alert("Second password is less than 8 characters long.")
    } else if (password_one != password_two) {
        alert("Passwords do not match")
        alert("Please try again and re-enter your password.");
    } else {
        alert("Password Successfully Verified.")
    }
}
