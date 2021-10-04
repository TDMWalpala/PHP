Consider the following scenario given with respect to a hospital.

Suwa Sahana is a private hospital with the basic goal of providing high-quality, cost effective 
health care services for the surrounding community in a compassionate, caring, and personalized 
manner. This hospital provides a number of key services, including general medical and surgical 
care, general intensive care, cardiology department, open-heart surgery, neurology department, 
pediatric medical and surgical care and a 24-hour emergency department. The Suwa Sahana 
Private Hospital is divided into two primary organizational groups. The doctors, headed by Dr. 
Mendis (chief of staff), are responsible for the quality of medical care provided to their patients 
and the group headed by Ms. Perera (CEO and president) provides the nursing, clinical, and 
administrative support the doctors need to serve their patients. In response to the stable growth and 
development plans at Suwa Sahana Private Hospital, a special study team including Mr. Herath, 
Mr. Lenin, Dr. Jayamanna, and a consultant has been developing a long-term strategic plan, 
including an information systems plan for the hospital. Their work is not complete, but they have 
begun to identify many of the elements necessary to build the plan. The study team has developed 
a preliminary list of business functions that describe the administrative and medical activities 
within the hospital. These functions consider the organizational goals. At this point, the study team 
has identified five major business functions as patient care administration, patient care services, 
clinical services, financial management, and administrative services. From discussions with 
hospital staff, reviewing hospital documents, and studying existing information systems, the study 
team developed the below content by describing the policies of the hospital and nature of the 
hospital’s operation.

Employee can be any person employed as part of the hospital staff. Each employee works 
in the hospital is having an employee number (identifier).Hospital records their name, address , 
employee working status as either part time or full time and a contact number. The hospital 
employs around 250 full-time and 150 part-time personnel, among them 50 full time and 70 parttime registered nurses.These employees fall into two categories as medical staff and non-medical 
staff. All the medical staff members should be a registered member of the Sri Lanka Medical 
Council and hospital records their Medical Council registration number, joined and resigned date 
from the service of the hospital. Hospital’s active medical staff includes about 150
Non-medical staff of this hospital employs only 60 attendants and cleaners. All the members of 
the cleaning staff are employed at the hospital on contract basis. Hence hospital maintains their 
contract number, start date and end date of the contract. At the same time hospital records the 
hourly charge rate of each attendant. Medical activities within the hospital take place through 
Patient Care Units. This Patient Care Unit can be a diagnostic unit or a ward such as radiology, 
clinical laboratory and cardiac unit. Each diagnostic unit is having an identifier and name while 
each ward has a ward identifier and a ward name. Further a Patient Care Unit staffs its medical 
team with a number of doctors. Each Patient Care Unit is assigned a certain number of both medical 
staff members and non-medical staff members. These medical staff members and non- medical 
staff members may be assigned to multiple Patient Care Units.
A patient is a person who is either admitted to the hospital and thus would be considered as 
in-patient or is registered as an out-patient. Each patient has a patient identifier and a name. A 
patient may be assigned to a ward and both admitted and discharged date and time will be recorded. 
Out-patients are not assigned to a ward. They are directing to the Out Patient Department 
(OPD).Hospital records the date and time of out-patients arrival to the OPD. A patient who has 
taken the treatments from the hospital may be re-visits to the hospital later for same or different 
treatment.Hence, the same patient may be in-patient or out-patient,but not in the same date and 
time.In such situations, hospital refers previous patient identifier of the patient. Prior to a patient 
being seen by a doctor, a nurse typically obtains and records relevant information about the patient. 
This includes the weight, blood pressure, pulse, and temperature.Finally, any symptoms the patient 
describes at the moment are recorded. The nurse who assesses the vital signs also records the date 
and time of records obtaining.In addition to the characteristics already mentioned, the hospital 
records a number of other characteristics about their patients who are admitted to the hospital: 
patient’s birth date, emergency contact information (Hospital requires at least one emergency 
contact information when a patient is admitted to the hospital. A patient may have more than one 
emergency contacts) including first and last name, relationship to patient, address, and their contact 
number, insurance company information (Assume a patient may register with only one insurance 
company and some patients may not have any insurance ) including insurance company name, 
registered branch name, branch address , contact number of the relevant branch and information 
about the insurance subscriber in case the patient is not the insurance subscriber (last and first name, 
relationship to patient, address, and contact number.Once a patient admitted to the hospital,a nurse 
obtains the daily records of weight, blood pressure, pulse, temperature and symptoms the patient 
describes at the moment , until the patient get discharge.Sometimes these records of a patient may 
be taken several times for a day. A nurse may obtain daily records of any number of patients or 
may not obtain daily records of any patients.For a particular day , such daily records of a patient 
may be taken by several nurses.But at a particular time all records of a patient should be taken by 
exactly one nurse.The same nurse may not obtain all the daily records of a given patient until that 
patient discharged.
3
A doctor is a member of the hospital medical staff who may take decision to admit patients 
to the hospital, diagnose patients and administer medical treatments. A doctor needs a DEA 
registration number from the Drug Enforcement by any Administration to be able to prescribe 
controlled substances.Hospital records DEA number of each doctor and their area of specialty. (if 
any) The decision of admitting a patient to the hospital should be exactly taken by one doctor. A 
doctor may admit any number of patients or may not admit any patients. Hence the patient’s 
primary care doctor who admitted the patient to the hospital is recorded. Doctors may perform any 
number of diagnoses for a patient or may not perform any diagnoses. Further a doctor diagnoses 
patients, and a patient is diagnosed by any number of doctors. Diagnosis is a patient’s medical 
condition diagnosed by a doctor. Each diagnosis has a diagnosis code and diagnosis name. Doctors 
diagnose any number of conditions affecting a patient, and a diagnosis may apply to many patients. 
The hospital records the following information of the patient’s diagnosis : date and time of 
diagnosis and description. Doctors may perform any number of treatments for a patient or may not 
perform any treatment. A treatment may be performed on any number of patients, and a patient 
may have treatments performed by any number of doctors. Treatment is any test or drug performed 
by a doctor for a patient. These tests may be a diagnostic test lab tests such as lipid profile, CBC, 
liver function tests or diagnostic imaging tests such as MRIs and X-rays. The date and time of each 
treatment will be recorded. A test is having following information: test code, name, and cost of the 
test. For each drug, the hospital records the following information: drug code, the name of the 
drug, unit cost and drug type such as liquid, tablets.
Each employee in the hospital is assigned to work in one or more Patient Care Units. Each 
Patient Care Unit has at least one employee and may have any number of employees. The hospital 
records the number of hours per week that a given employee works in a particular Patient Care 
Unit. Each Patient Care Unit has exactly one employee who is designated in-charge for that Patient 
Care Unit. One employee can’t be in-charge of several Patient Care Units. A given patient may or 
may not be assigned to a bed since some patients are outpatients. Beds in the hospital may be 
assigned to a patient who is admitted to the hospital. Wards are having beds and each bed has a 
bed identifier.Same bed number doesn’t get repeated within several wards. The hospital cares only 
about the current ward a patient is assigned to (if assigned at all).Both in- patient and out-patients 
treating from the hospital are using drugs which are supplied by the vendors those who have been 
registered under the Health ministry. A vendor may supply any number of drugs and a drug may 
be supplied by one or more vendors.Hospital records their name, address, contact number and 
registration number provided by the health ministry. Further for each drug supplied by vendors, 
the hospital records the following: supplied date, quantity and drug type such as liquid, tablets, 
unit cost and total cost (which can be computed by multiplying quantity into unit cost)