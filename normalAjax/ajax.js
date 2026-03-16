function fetchData(){
    document.getElementById("myForm").addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        
        fetch("process.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(text => {
            console.log("Response:", text);
            const data = JSON.parse(text);
            document.getElementById("display").innerHTML = "Welcome Sir " + data.username;
            document.getElementById("display2").innerHTML = "Age: " + data.age;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
}

fetchData();