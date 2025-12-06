document.getElementById('student-form').addEventListener('submit', addStudent);
 
function addStudent(event) {
    event.preventDefault(); 
 
    let studentName = document.getElementById('student-name').value;
    if (studentName === '') {
        alert('Please enter a student name');
        return;
    }
 
    let li = document.createElement('li');
    li.classList.add('student-item');
   
    let span = document.createElement('span');
    span.textContent = studentName;

    let editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.classList.add('btn-edit');
    editButton.addEventListener('click', function() { editStudent(li, span); });
 
    let deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.classList.add('btn-delete');
    deleteButton.addEventListener('click', function() { deleteStudent(li); });
 
    li.appendChild(span);
    li.appendChild(editButton);
    li.appendChild(deleteButton);
 
    document.getElementById('student-list').appendChild(li);
 
    document.getElementById('student-name').value = '';
}
 
function deleteStudent(studentElement) {
    studentElement.remove();
}
 
function editStudent(studentElement, studentNameElement) {
    let newName = prompt('Enter the new name:', studentNameElement.textContent);
    if (newName !== null && newName !== '') {
        studentNameElement.textContent = newName;
    }
}
 
function changeListStyle() {
    let students = document.querySelectorAll('.student-item');
    students.forEach(student => {
        student.classList.toggle('highlight');
    });
}
 
let changeStyleButton = document.createElement('button');
changeStyleButton.textContent = 'Highlight Students';
changeStyleButton.addEventListener('click', changeListStyle);
document.body.appendChild(changeStyleButton);