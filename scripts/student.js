document.addEventListener("DOMContentLoaded", function () {
    // Sample student data
    const students = [
        { name: "John Doe", age: 20, grade: "A" },
        { name: "Jane Smith", age: 22, grade: "B" },
        // Add more student objects as needed
    ];

    const studentListContainer = document.getElementById("student-list");

    // Display student details
    students.forEach((student) => {
        const card = document.createElement("div");
        card.classList.add("student-card");

        const content = `<p><strong>Name:</strong> ${student.name}</p>
                         <p><strong>Age:</strong> ${student.age}</p>
                         <p><strong>Grade:</strong> ${student.grade}</p>`;

        card.innerHTML = content;
        studentListContainer.appendChild(card);
    });
});
