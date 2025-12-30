<?php
    require_once 'db.php';
function getAllCourses() {
    getConnection();
    $sql = "SELECT * FROM courses";
    $result = mysqli_query($con, $sql);
    $courses = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }
    return $courses;
}

function countCourses() {
    $con = getConnection();
    $sql = "SELECT COUNT(*) AS total FROM courses";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['total'];
}

function getCourseByTitle($title) {
    $con = getConnection();
    $title = mysqli_real_escape_string($con, $title);
    $sql = "SELECT * FROM courses WHERE title='{$title}' LIMIT 1";
    $result = mysqli_query($con, $sql);
    if ($result && mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}