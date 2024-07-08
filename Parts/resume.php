<?php
$resume_entries = [
    [
        "date" => "(2008/9 – 2009/12)",
        "title" => "IT SERVICE TECHNIKER",
        "company" => "ALTAGY COMPANY",
        "country" => "Egypt",
        "description" => "Specialized in the maintenance of computers with a focus on troubleshooting and resolving hardware and software issues, optimizing system performance, and installing and configuring new systems and applications."
    ],
    [
        "date" => "(2010/1 – 2010/11)",
        "title" => "IT SERVICE TECHNIKER",
        "company" => "EGYPTIAN COMPANY FOR CONTRACTING",
        "country" => "Egypt",
        "description" => "Providing technical support and assistance to users, troubleshooting hardware and software issues, installing and configuring new systems and applications, and maintaining a high level of customer satisfaction through timely and effective problem resolution."
    ],
    [
        "date" => "(2011/3 – 2012/4)",
        "title" => "IT TRAINER",
        "company" => "EGYPTIAN DREAM SOCIETY",
        "country" => "Egypt",
        "description" => "Designing and delivering training programs and workshops on a variety of technology-related topics, including software applications, operating systems, and technical skills. I also assess the needs of individual learners and customize training materials and approaches to meet their specific learning objectives, and provide ongoing support and guidance to help them effectively apply their new skills in the workplace."
    ],
    [
        "date" => "(3/2012- 6/2021)",
        "title" => "Assistant Director, IT administrator and Computer Teacher",
        "company" => "DAR ALHNAN SCHOOL",
        "country" => "Saudi Arabia",
        "description" => "1. Installing and configuring computer hardware, software, systems, networks, printers, and scanners.<br>
                         2. Monitoring and maintaining the performance of computer systems and networks.<br>
                         3. Managing user accounts, permissions, and access to systems and data.<br>
                         4. Providing technical support to users for hardware, software, and networking issues.<br>
                         5. Managing backups, disaster recovery, and data storage.<br>
                         6. Ensuring that computer systems and networks are secure from cyber threats.<br>
                         7. Maintaining inventory and tracking of computer equipment and software licenses.<br>
                         8. Evaluating and recommending new technologies to improve the organization's IT infrastructure.<br>
                         9. Collaborating with other IT professionals and departments to plan, coordinate, and implement projects and initiatives.<br>
                         10. Staying up-to-date with advances in technology and making recommendations for improvements to the organization's IT systems and processes."
    ],
    [
        "date" => "(2014/2019)",
        "title" => "FRONTEND DEVELOPER",
        "company" => "WESAM ALTMAIUZ COMPANY",
        "country" => "Saudi Arabia",
        "description" => "1. Designing and implementing user interfaces using HTML, CSS, and JavaScript<br>
                         2. Collaborating with designers to create visually appealing layouts and interactive elements<br>
                         3. Ensuring that the user interface is responsive and works well on different devices and screen sizes<br>
                         4. Implementing and testing features and functionality using web development frameworks and libraries<br>
                         5. Optimizing the performance of the user interface<br>
                         6. Debugging and troubleshooting issues with the user interface<br>
                         7. Collaborating with back-end developers to integrate the user interface with the back-end application<br>
                         8. Staying up-to-date with advances in web development technologies and best practices<br>
                         9. Participating in code reviews and providing feedback to other team members<br>
                         10. Maintaining documentation for the user interface and its development processes."
    ],
    [
        "date" => "(2023)",
        "title" => "Web designer / Web developer",
        "company" => "Zentrum für Geistiges Heilen",
        "country" => "Germany",
        "description" => "1. Design and Development: Conceptualized and implemented the visual and interactive elements of the website, ensuring a user-friendly experience across various devices and browsers.<br>
                         2. CMS and Functionality: Integrated and customized a Content Management System for easy content updates, and developed back-end functionalities to support the Zentrum's operations.<br>
                         3. Optimization and SEO: Enhanced website performance and visibility through search engine optimization, loading time reduction, and regular maintenance for smooth operation.<br>
                         4. Collaboration and Training: Worked closely with the Zentrum team to align the website with organizational goals and provided training for staff to manage and update the website efficiently."
    ],
    [
        "date" => "(7/2023 - Till now)",
        "title" => "Web designer / Web developer",
        "company" => "Argon Dental Vertriebs Gmbh & Co.KG",
        "country" => "Germany",
        "description" => "1. Developing and maintaining the e-commerce platform using Shopware, focusing on functionality and user experience<br>
                         2. Implementing product management systems for efficient categorization and display of dental products<br>
                         3. Conducting technical optimization to enhance site performance, including speed, security, and responsiveness<br>
                         4. Providing ongoing technical support and troubleshooting to ensure continuous, smooth operations of the online shop<br>
                         5. Collaborating with cross-functional teams to align the online platform with business strategies and customer needs<br>
                         6. Ensuring the online shop's compliance with industry standards and legal regulations specific to dental product sales<br>
                         7. Monitoring and analyzing user feedback to incorporate into continuous website improvements<br>
                         8. Staying up-to-date with the latest e-commerce trends and technologies to keep the platform ahead of competitors<br>
                         9. Participating in team meetings and providing insights for the enhancement of the online shopping experience<br>
                         10. Documenting development processes and maintaining records for all implemented features and updates."
    ]
];

$education_entries = [
    [
        "date" => "BACHELOR OF INFORMATION SYSTEMS (IT)",
        "institution" => "CAIRO HIGHER INSTITUTES",
        "description" => "A Bachelor of Information Systems (IT) is a four-year undergraduate degree program that focuses on the design, implementation, and management of computer-based information systems. The program typically covers a wide range of topics, including programming, database management, systems analysis and design, network and security, project management, and business analytics."
    ],
    [
        "date" => "Mini Master Business Administration",
        "institution" => "CAIRO UNIVERSITY",
        "description" => "A shorter version of a traditional MBA program, typically lasting one to two years. It is designed to provide students with a solid foundation in business principles and practices, as well as the skills and knowledge needed to succeed in leadership roles in a variety of industries."
    ],
    [
        "date" => "Business Administration & Quality Management Diploma",
        "institution" => "CAIRO UNIVERSITY",
        "description" => "An educational program that combines coursework in business administration with training in quality management principles and practices."
    ],
    [
        "date" => "Marketing & Sales Management Diploma",
        "institution" => "CAIRO UNIVERSITY",
        "description" => "The Marketing component of the program typically covers a range of topics, such as consumer behavior, market research, branding, advertising, and social media marketing."
    ],
    [
        "date" => "Human Resources Management Diploma",
        "institution" => "CAIRO UNIVERSITY",
        "description" => "An educational program that focuses on the principles and practices of human resources management. The program typically covers a range of topics, such as employment law, employee relations, compensation and benefits, training and development, and performance management. It may also include coursework in business administration, leadership, and organizational behavior."
    ]
];
// Split the resume entries into two columns
$resume_entries_column1 = array_slice($resume_entries, 0, ceil(count($resume_entries) / 2));
$resume_entries_column2 = array_slice($resume_entries, ceil(count($resume_entries) / 2));

// Split the education entries into two columns
$education_entries_column1 = array_slice($education_entries, 0, ceil(count($education_entries) / 2));
$education_entries_column2 = array_slice($education_entries, ceil(count($education_entries) / 2));
?>


<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Resume</h1>
                <h2 class="mb-4">Resume</h2>
                <p>"I am a front-end developer with a strong foundation in HTML, CSS, and JavaScript, and a passion for creating intuitive and user-friendly web experiences."</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($resume_entries_column1 as $entry): ?>
                    <div class="resume-wrap ftco-animate">
                        <span class="date"><?php echo $entry['date']; ?></span>
                        <h2><?php echo $entry['title']; ?></h2>
                        <span class="position"><?php echo $entry['company']; ?><span class="country"> <?php echo $entry['country']; ?></span></span>
                        <p class="mt-4"><?php echo $entry['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
                <?php foreach ($resume_entries_column2 as $entry): ?>
                    <div class="resume-wrap ftco-animate">
                        <span class="date"><?php echo $entry['date']; ?></span>
                        <h2><?php echo $entry['title']; ?></h2>
                        <span class="position"><?php echo $entry['company']; ?><span class="country"> <?php echo $entry['country']; ?></span></span>
                        <p class="mt-4"><?php echo $entry['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="row justify-content-center pb-5" id="EDUCATION-section">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">EDUCATION</h1>
                <h2 class="mb-4">EDUCATION</h2>
                <p>"I am passionate about staying up-to-date with the latest technologies and best practices in my field, and am always looking for opportunities to learn and grow as a professional."</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($education_entries_column1 as $entry): ?>
                    <div class="resume-wrap ftco-animate">
                        <span class="date"><?php echo $entry['date']; ?></span>
                        <h2><?php echo $entry['institution']; ?></h2>
                        <p class="mt-4"><?php echo $entry['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
                <?php foreach ($education_entries_column2 as $entry): ?>
                    <div class="resume-wrap ftco-animate">
                        <span class="date"><?php echo $entry['date']; ?></span>
                        <h2><?php echo $entry['institution']; ?></h2>
                        <p class="mt-4"><?php echo $entry['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="images/Lebenslauf Ahmed Hassan.pdf" class="btn btn-primary py-4 px-5">Download CV</a></p>
            </div>
        </div>
    </div>
</section>