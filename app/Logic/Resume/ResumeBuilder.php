<?php


namespace App\Logic\Resume;

use App\Resume;
use App\Traits\DBUtils;
use App\Traits\ValidateUtils;

class ResumeBuilder
{

    use DBUtils;
    use ValidateUtils;

    /**
     * Entry function
     * Function to populate the resume data into database
     *
     * @param Array $data Input from resume builder UI.
     * @return type
     **/
    public function buildResume(array $data)
    {
        try {
            // Insert into resume_collects
            $resume_id = $this->insertToCollects($data);

            // Insert into resume_users
            $this->insertUserInfo($data, $resume_id);

            // Insert into resume_jobs
            $this->insertUserJobs($data, $resume_id);

            // Insert into resume_education
            $this->insertUserEducation($data, $resume_id);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    /**
     * Validate the input data.
     *
     * @param Array $data form data
     * @return object json when validation fails else returms null.
     **/
    public function validateInput(array $data)
    {
        $validation_error = $this->validate_input($data, $this->validate_rules, $this->validate_message);
        if (!is_null($validation_error) || !empty($validation_error)) {
            return $validation_error;
        }
    }

    /**
     * Populate the collect info into database
     * stores UUID and user email
     *
     * @param Type $var Description
     * @return int $resume_id primary key used in all other table
     * @throws conditon
     **/
    public function insertToCollects(array $data)
    {
        Resume::create([
            'uuid'=>'',
            
        ])
    }


    /**
     * Populate the user info into database
     *
     * @param array $data Description
     * @param int $resume_id Description
     * @return boolean [true, false] 
     * @throws conditon
     **/
    public function insertUserInfo(array $data, int $resume_id)
    {
        # code...
    }

    /**
     *  Populate the user jobs into database
     *
     * @param array $data Description
     * @param int $resume_id Description
     * @return boolean [true, false] 
     * @throws conditon
     **/
    public function insertUserJobs(array $data, int $resume_id)
    {
        # code...
    }

    /**
     *  Populate the user education into database
     *
     *
     * @param Type $var Description
     * @return boolean [true, false] 
     * @throws conditon
     **/
    public function insertUserEducation(array $data)
    {
        # code...
    }

    private $validate_rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'job.title.*' => 'required|distinct',
        'job.employer.*' => 'required',
        'school.name.*' => 'required',
        'school.location.*' => 'required',
        'school.degree.*' => 'required',
        'school.field_of_study.*' => 'required',
        'school.start_year.*' => 'required|date',
        'school.end_year.*' => 'required|date',
        'skills' => 'required',
        'user_summary' => 'required',
    ];

    private $validate_message = [
        'first_name.required' => 'First name can not be empty.',
        'last_name.required' => 'Last name can not be empty.',
        'phone.required' => 'Phone number can not be empty.',
        'email.required' => 'Email can not be empty.',
        'skills.required' => "Are you sure you don't have any skills ?",
        'user_summary.required' => 'First impression is the last impression.',
        'job.title.*.required' => 'Job title field can not be empty.',
        'job.title.*.distinct' => 'Job title field can not be duplicate.',
        'job.employer.*.required' => 'Job employer field can not be empty.',
        'school.name.*.required' => 'School name can not be empty.',
        'school.location.*.required' => 'School location can not be empty.',
        'school.degree.*.required' => 'Degree can not be empty.',
        'school.field_of_study.*.required' => 'Field of study can not be empty.',
        'school.start_year.*.required' => 'Start year is required',
        'school.end_year.*.required' => 'End year is required',
    ];
}
