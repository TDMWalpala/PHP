-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 02:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suwa_sahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendent`
--

CREATE TABLE `attendent` (
  `Employee_No` int(11) NOT NULL,
  `Hourlycharge_Rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendent`
--

INSERT INTO `attendent` (`Employee_No`, `Hourlycharge_Rate`) VALUES
(4, 100);

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `Bed_No` int(11) NOT NULL,
  `Ward_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`Bed_No`, `Ward_No`) VALUES
(1, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `Employee_No` int(11) NOT NULL,
  `Contract_No` varchar(100) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`Employee_No`, `Contract_No`, `Start_Date`, `End_Date`) VALUES
(3, '15542', '2021-01-06', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `diagnose`
--

CREATE TABLE `diagnose` (
  `Diagnose_Code` varchar(100) NOT NULL,
  `Employee_No` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Diagnose_Name` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnose`
--

INSERT INTO `diagnose` (`Diagnose_Code`, `Employee_No`, `Patient_Id`, `Diagnose_Name`, `Date`, `Time`, `Description`) VALUES
('125', 1, 1, 'Checkup', '2021-10-02', '13:23:00', 'Good Condition');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_unit`
--

CREATE TABLE `diagnostic_unit` (
  `Unit_No` int(11) NOT NULL,
  `Unit_Name` varchar(100) NOT NULL,
  `PCU_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnostic_unit`
--

INSERT INTO `diagnostic_unit` (`Unit_No`, `Unit_Name`, `PCU_Id`) VALUES
(1, 'Chardiology', 1),
(2, 'X-ray', 4);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Employee_No` int(11) NOT NULL,
  `DEA_No` varchar(100) NOT NULL,
  `Speaciality_Area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Employee_No`, `DEA_No`, `Speaciality_Area`) VALUES
(1, 'DEA200', 'Heart'),
(5, 'DEA194', 'Eye');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `Drug_Code` varchar(100) NOT NULL,
  `Drug_Type` varchar(100) NOT NULL,
  `Unit_Cost` float NOT NULL,
  `Treatment_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`Drug_Code`, `Drug_Type`, `Unit_Cost`, `Treatment_No`) VALUES
('120', 'Notserious', 5, 1),
('150', 'Notserious', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `drug_supply`
--

CREATE TABLE `drug_supply` (
  `Reg_No` varchar(100) NOT NULL,
  `Drug_Code` varchar(100) NOT NULL,
  `Supply_Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Drug_Type` varchar(100) NOT NULL,
  `Unit_Cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug_supply`
--

INSERT INTO `drug_supply` (`Reg_No`, `Drug_Code`, `Supply_Date`, `Quantity`, `Drug_Type`, `Unit_Cost`) VALUES
('RE5030372', '120', '2021-10-02', 1000, 'Notserious', 5);

-- --------------------------------------------------------

--
-- Table structure for table `emegency_contact`
--

CREATE TABLE `emegency_contact` (
  `patient_Id` int(11) NOT NULL,
  `Contact_No` varchar(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Relationship` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emegency_contact`
--

INSERT INTO `emegency_contact` (`patient_Id`, `Contact_No`, `First_Name`, `Last_Name`, `Relationship`, `Address`) VALUES
(1, '0778008798', 'Pual', 'Wolker', 'Father', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_No` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Working_Status` varchar(100) NOT NULL,
  `Contact_No` varchar(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Employee_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_No`, `Name`, `Working_Status`, `Contact_No`, `Address`, `Employee_Type`) VALUES
(1, 'Thamira', 'full time', '0717315267', 'Beliatta', 'Medical Staff'),
(2, 'Tharindu', 'part time', '0717315261', 'Matara', 'Medical Staff'),
(3, 'Punsara', 'full time', '0777315268', 'Matara', 'Non medical Staff'),
(4, 'Dewmi', 'part time', '0787315264', 'Maharagama', 'Non medical Staff'),
(5, 'Nimal', 'full time', '0117845121', 'Kandy', 'Medical Staff'),
(6, 'John', 'part time', '0718315267', 'Maharagama', 'Medical Staff');

-- --------------------------------------------------------

--
-- Table structure for table `employee_assign`
--

CREATE TABLE `employee_assign` (
  `Employee_No` int(11) NOT NULL,
  `PCU_Id` int(11) NOT NULL,
  `Hours_Per_Week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_assign`
--

INSERT INTO `employee_assign` (`Employee_No`, `PCU_Id`, `Hours_Per_Week`) VALUES
(1, 1, 200),
(2, 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `insuarance_company`
--

CREATE TABLE `insuarance_company` (
  `patient_Id` int(11) NOT NULL,
  `Registered_Branch_Name` varchar(100) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Branch_Contact_No` varchar(10) NOT NULL,
  `Branch_Address` varchar(200) NOT NULL,
  `IS_First_Name` varchar(100) DEFAULT NULL,
  `IS_Last_Name` varchar(100) DEFAULT NULL,
  `IS_Contact_No` varchar(15) DEFAULT NULL,
  `IS_Relationship` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insuarance_company`
--

INSERT INTO `insuarance_company` (`patient_Id`, `Registered_Branch_Name`, `Company_Name`, `Branch_Contact_No`, `Branch_Address`, `IS_First_Name`, `IS_Last_Name`, `IS_Contact_No`, `IS_Relationship`) VALUES
(1, 'AIANugegoda', 'AIA', '0112251727', 'Nugegoda', 'Pual', 'Wolker', '0773042459', 'Father');

-- --------------------------------------------------------

--
-- Table structure for table `in_patient`
--

CREATE TABLE `in_patient` (
  `patient_Id` int(11) NOT NULL,
  `Admitted_Time` time NOT NULL,
  `Admitted_Date` date NOT NULL,
  `Discharged_Time` time DEFAULT NULL,
  `Discharged_Date` date DEFAULT NULL,
  `Ward_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_patient`
--

INSERT INTO `in_patient` (`patient_Id`, `Admitted_Time`, `Admitted_Date`, `Discharged_Time`, `Discharged_Date`, `Ward_No`) VALUES
(1, '13:13:00', '2021-10-02', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical_staff`
--

CREATE TABLE `medical_staff` (
  `Employee_No` int(11) NOT NULL,
  `Reg_No` varchar(100) NOT NULL,
  `Join_Date` date NOT NULL,
  `Resign_Date` date DEFAULT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_staff`
--

INSERT INTO `medical_staff` (`Employee_No`, `Reg_No`, `Join_Date`, `Resign_Date`, `Type`) VALUES
(1, '20002009', '2021-10-02', NULL, 'doctor'),
(2, '20001967', '2021-10-02', NULL, 'nurse'),
(5, '20001989', '2021-01-06', NULL, 'doctor'),
(6, '20002565', '2021-02-02', NULL, 'nurse');

-- --------------------------------------------------------

--
-- Table structure for table `non_medical_staff`
--

CREATE TABLE `non_medical_staff` (
  `Employee_No` int(11) NOT NULL,
  `Staff_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_medical_staff`
--

INSERT INTO `non_medical_staff` (`Employee_No`, `Staff_Type`) VALUES
(3, 'cleaner'),
(4, 'attendent');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Employee_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Employee_No`) VALUES
(2),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `out_patient`
--

CREATE TABLE `out_patient` (
  `patient_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_patient`
--

INSERT INTO `out_patient` (`patient_Id`, `Date`, `Time`) VALUES
(2, '2021-10-02', '13:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_Id` int(11) NOT NULL,
  `Patient_Name` varchar(100) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Patient_Type` varchar(100) NOT NULL,
  `Bed_No` int(11) DEFAULT NULL,
  `Employee_No` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_Id`, `Patient_Name`, `Birth_Date`, `Patient_Type`, `Bed_No`, `Employee_No`) VALUES
(1, 'Mike', '2021-10-02', 'In patient', 1, 1),
(2, 'Kevin', '2021-09-29', 'Out patient', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_care_unit`
--

CREATE TABLE `patient_care_unit` (
  `PCU_Id` int(11) NOT NULL,
  `Employee_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_care_unit`
--

INSERT INTO `patient_care_unit` (`PCU_Id`, `Employee_No`) VALUES
(1, 1),
(2, 2),
(3, 5),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `Employee_No` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Temperature` float NOT NULL,
  `Pulse` int(11) NOT NULL,
  `Blood_Pressure` varchar(50) NOT NULL,
  `Weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`Employee_No`, `Patient_Id`, `Date`, `Time`, `Temperature`, `Pulse`, `Blood_Pressure`, `Weight`) VALUES
(2, 1, '2021-10-02', '13:25:00', 37, 80, '120/80', 55);

-- --------------------------------------------------------

--
-- Table structure for table `patient_symptom`
--

CREATE TABLE `patient_symptom` (
  `Employee_No` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Symptom` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_symptom`
--

INSERT INTO `patient_symptom` (`Employee_No`, `Patient_Id`, `Symptom`) VALUES
(2, 1, 'Good Condition');

-- --------------------------------------------------------

--
-- Table structure for table `patient_treat`
--

CREATE TABLE `patient_treat` (
  `Employee_No` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Treatment_No` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_treat`
--

INSERT INTO `patient_treat` (`Employee_No`, `Patient_Id`, `Treatment_No`, `Date`, `Time`) VALUES
(1, 1, 2, '2021-10-02', '13:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Test_Code` int(11) NOT NULL,
  `Cost` float NOT NULL,
  `Treatment_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Test_Code`, `Cost`, `Treatment_No`) VALUES
(125, 1000, 2),
(160, 1200, 4);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Treatment_No` int(11) NOT NULL,
  `TName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Treatment_No`, `TName`) VALUES
(1, 'Panadol'),
(2, 'Scan'),
(3, 'VitaminC'),
(4, 'Blood');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Employee_No` int(11) DEFAULT NULL,
  `Admin` tinyint(1) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Name`, `Password`, `Employee_No`, `Admin`, `userid`) VALUES
('Admin', '123', NULL, 1, 1),
('John', '123', 6, 0, 5),
('Nimal', '123', 5, 0, 4),
('Thamira', '123', 1, 0, 2),
('Tharindu', '123', 2, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `Reg_No` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_No` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`Reg_No`, `Name`, `Address`, `Contact_No`) VALUES
('RE5030372', 'Sam', 'Colombo', '0112224800');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `Ward_No` int(11) NOT NULL,
  `Ward_Name` varchar(100) NOT NULL,
  `PCU_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`Ward_No`, `Ward_Name`, `PCU_Id`) VALUES
(1, 'ENT', 2),
(2, 'Eye', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendent`
--
ALTER TABLE `attendent`
  ADD PRIMARY KEY (`Employee_No`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`Bed_No`),
  ADD KEY `Ward_No` (`Ward_No`);

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`Employee_No`),
  ADD UNIQUE KEY `Contract_No` (`Contract_No`);

--
-- Indexes for table `diagnose`
--
ALTER TABLE `diagnose`
  ADD PRIMARY KEY (`Diagnose_Code`,`Employee_No`,`Patient_Id`),
  ADD KEY `EmployeeNoFK` (`Employee_No`),
  ADD KEY `FKPatientId` (`Patient_Id`);

--
-- Indexes for table `diagnostic_unit`
--
ALTER TABLE `diagnostic_unit`
  ADD PRIMARY KEY (`Unit_No`),
  ADD UNIQUE KEY `Unit_Name` (`Unit_Name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Employee_No`),
  ADD UNIQUE KEY `DEA_No` (`DEA_No`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`Drug_Code`),
  ADD UNIQUE KEY `Treament_No` (`Treatment_No`);

--
-- Indexes for table `drug_supply`
--
ALTER TABLE `drug_supply`
  ADD PRIMARY KEY (`Reg_No`,`Drug_Code`),
  ADD KEY `FK_Drug_Code` (`Drug_Code`);

--
-- Indexes for table `emegency_contact`
--
ALTER TABLE `emegency_contact`
  ADD PRIMARY KEY (`patient_Id`,`Contact_No`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_No`),
  ADD UNIQUE KEY `Contact_No` (`Contact_No`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `employee_assign`
--
ALTER TABLE `employee_assign`
  ADD PRIMARY KEY (`Employee_No`,`PCU_Id`),
  ADD KEY `FK_PCUID` (`PCU_Id`);

--
-- Indexes for table `insuarance_company`
--
ALTER TABLE `insuarance_company`
  ADD PRIMARY KEY (`patient_Id`,`Company_Name`);

--
-- Indexes for table `in_patient`
--
ALTER TABLE `in_patient`
  ADD PRIMARY KEY (`patient_Id`),
  ADD KEY `Ward_No` (`Ward_No`);

--
-- Indexes for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD PRIMARY KEY (`Employee_No`),
  ADD UNIQUE KEY `Reg_No` (`Reg_No`);

--
-- Indexes for table `non_medical_staff`
--
ALTER TABLE `non_medical_staff`
  ADD PRIMARY KEY (`Employee_No`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`Employee_No`);

--
-- Indexes for table `out_patient`
--
ALTER TABLE `out_patient`
  ADD PRIMARY KEY (`patient_Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_Id`),
  ADD UNIQUE KEY `Patient_Name` (`Patient_Name`),
  ADD KEY `Bed_Id` (`Bed_No`),
  ADD KEY `Employee_No` (`Employee_No`);

--
-- Indexes for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  ADD PRIMARY KEY (`PCU_Id`),
  ADD UNIQUE KEY `Employee_No` (`Employee_No`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`Employee_No`,`Patient_Id`,`Date`,`Time`),
  ADD KEY `FK_PatientId` (`Patient_Id`);

--
-- Indexes for table `patient_symptom`
--
ALTER TABLE `patient_symptom`
  ADD PRIMARY KEY (`Employee_No`,`Patient_Id`,`Symptom`);

--
-- Indexes for table `patient_treat`
--
ALTER TABLE `patient_treat`
  ADD PRIMARY KEY (`Employee_No`,`Patient_Id`,`Treatment_No`,`Date`,`Time`),
  ADD KEY `PatientIDFK` (`Patient_Id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Test_Code`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Treatment_No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `Employee_No` (`Employee_No`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`Reg_No`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`Ward_No`),
  ADD UNIQUE KEY `Ward_Name` (`Ward_Name`),
  ADD UNIQUE KEY `PCU_Id` (`PCU_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `Bed_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diagnostic_unit`
--
ALTER TABLE `diagnostic_unit`
  MODIFY `Unit_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  MODIFY `PCU_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Test_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `Treatment_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `Ward_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
  ADD CONSTRAINT `Ward_No_FK` FOREIGN KEY (`Ward_No`) REFERENCES `ward` (`Ward_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnose`
--
ALTER TABLE `diagnose`
  ADD CONSTRAINT `EmployeeNoFK` FOREIGN KEY (`Employee_No`) REFERENCES `employee` (`Employee_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKPatientId` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drug_supply`
--
ALTER TABLE `drug_supply`
  ADD CONSTRAINT `FK_Drug_Code` FOREIGN KEY (`Drug_Code`) REFERENCES `drug` (`Drug_Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Reg_No` FOREIGN KEY (`Reg_No`) REFERENCES `vendor` (`Reg_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_assign`
--
ALTER TABLE `employee_assign`
  ADD CONSTRAINT `FK_Emp_No` FOREIGN KEY (`Employee_No`) REFERENCES `employee` (`Employee_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PCUID` FOREIGN KEY (`PCU_Id`) REFERENCES `patient_care_unit` (`PCU_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `in_patient`
--
ALTER TABLE `in_patient`
  ADD CONSTRAINT `FK_Ward_No` FOREIGN KEY (`Ward_No`) REFERENCES `ward` (`Ward_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `Employee_No_FK` FOREIGN KEY (`Employee_No`) REFERENCES `employee` (`Employee_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Bed_No` FOREIGN KEY (`Bed_No`) REFERENCES `bed` (`Bed_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  ADD CONSTRAINT `FK_Employee_No` FOREIGN KEY (`Employee_No`) REFERENCES `employee` (`Employee_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD CONSTRAINT `FK_PatientId` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FkEMPNo` FOREIGN KEY (`Employee_No`) REFERENCES `employee` (`Employee_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_treat`
--
ALTER TABLE `patient_treat`
  ADD CONSTRAINT `Employee_NoFK` FOREIGN KEY (`Employee_No`) REFERENCES `employee` (`Employee_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PatientIDFK` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
