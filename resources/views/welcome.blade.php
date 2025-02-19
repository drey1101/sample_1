<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>/title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input {
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Form for checking ID number (10pts)-->
    <form id="checkForm">
        Enter enrolled ID:
        <input type="text" id="id" maxlength="8">
        <button type="submit">Enter</button>
    </form>

    <!--  Displaying the result of check (5pts)-->
    <div id="result"></div>

    <script>
        //dummy IDs
        const enrolledIds = [
            '22000123', '22000124', '22000125', '22000126', '22000127',
            '22000128', '22000129', '22000130', '22000131', '22000132', 
            '22000133', '22000134', '22000135', '22000136', '22000137', 
            '22000138', '22000139', '22000140', '22000141', '22000142',
        ];

        function checkStudent(studId) {
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve(enrolledIds.includes(studId));
                }, 2000);
            });
        }

        function contactRegistrar() {
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve(confirm("Student is not enrolled. Do you want to contact the registrar?") 
                        ? "Registrar has been contacted" 
                        : "Registrar has not been contacted"
                    );
                }, 500);
            });
        }

        document.getElementById('checkForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const studId = document.getElementById('id').value.trim();
            const resultDiv = document.getElementById('result');
            resultDiv.textContent = "Loading...";

            checkStudent(studId)
                .then((enrolled) => {
                    resultDiv.textContent = enrolled ? "Enrolled!" : "Not Enrolled!";
                    return enrolled ? null : contactRegistrar();
                })
                .then((message) => {
                    if (message) resultDiv.textContent += " " + message;
                })
                .catch((error) => {
                    resultDiv.textContent = "Error: " + error;
                });
        });
    </script>
</body>
</html>
