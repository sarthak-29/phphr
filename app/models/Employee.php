<?php
/* 
=======================================================================
 PHPHR — Open Source HR Management Software
 Version: 3.0
 License: MIT Open Source License
 Developed & Maintained By: PHPHR (https://www.phphr.com)
 
 Description:
 PHPHR is a Human Resource Management (HRM) platform available in
 two deployment models: PHPHR Open-Source, a free, self-hosted
 edition for essential HR operations, and PHPHR Cloud, a fully
 managed, enterprise-grade HRMS. PHPHR is designed to help
 organizations manage Employees, Attendance, Leaves, Payroll,
 and core HR workflows with simplicity, security, and speed.

 Core Modules Included (Open-Source Edition):
 - Employee Management
 - Attendance Tracking
 - Leave Management
 - Payroll Management
 - HR Dashboard
 - Secure Login

 This software is open for modification and extension.
 You are free to customize, improve, and commercially use the
 Open-Source edition without licensing fees, provided this
 copyright notice remains preserved.

 Website:
 https://www.phphr.com

 Live Demo:
 https://www.phphr.com/hr-software-demo/

 Download:
 https://www.phphr.com/download-hr-software/

 Community Contribution:
 Developers are welcome to contribute improvements, bug fixes,
 and enhancements to the Open-Source edition. Please visit our
 website for documentation, updates, and community support.

 Last Update: 14-12-2025
=======================================================================
*/
	
// app/models/Employee.php

class Employee
{
    protected $conn;
    protected $table = 'phphr_employees';

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function all(): array
    {
        $sql = "SELECT *
                FROM {$this->table}
                ORDER BY created_at DESC";
        $result = $this->conn->query($sql);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM {$this->table} WHERE id = ?"
        );
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create(array $data): bool
    {
        $sql = "INSERT INTO {$this->table}
            (user_id, employee_code, first_name, last_name, phone,
             department, designation, date_of_joining, salary, status, created_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            'isssssssdi',
            $data['user_id'],
            $data['employee_code'],
            $data['first_name'],
            $data['last_name'],
            $data['phone'],
            $data['department'],
            $data['designation'],
            $data['date_of_joining'],
            $data['salary'],
            $data['status']
        );

        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }

    public function update($id, array $data): bool
    {
        $sql = "UPDATE {$this->table}
                SET first_name=?, last_name=?, phone=?, department=?,
                    designation=?, date_of_joining=?, salary=?, status=?
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            'ssssssdii',
            $data['first_name'],
            $data['last_name'],
            $data['phone'],
            $data['department'],
            $data['designation'],
            $data['date_of_joining'],
            $data['salary'],
            $data['status'],
            $id
        );

        return $stmt->execute();
    }
	
public function allActive()
{
    $sql = "SELECT id, employee_code, first_name, last_name
            FROM phphr_employees
            WHERE status = 1
            ORDER BY first_name ASC";

    $result = $this->conn->query($sql);
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}
	
	
	
	
	
	

    public function delete($id): bool
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM {$this->table} WHERE id = ?"
        );
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
