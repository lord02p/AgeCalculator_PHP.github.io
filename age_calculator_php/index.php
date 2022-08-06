<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Age Calculator</title>

</head>

<body onload="loaded()">
    <div class="progeress_bar">
        <div class="loader"></div>
    </div>

    <header style="background-color: #5373c8; position:sticky; top: 0; z-index: 1;">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm " id="top" style="background-color: #5373c8;">
            <div class="container-fluid">
                <a class="navbar-brand navbar_icon" href="index.html">AGE<svg xmlns="http://www.w3.org/2000/svg" width="21" height="27" fill="currentColor" class="bi bi-calculator cal_img" viewBox="0 0 16 16">
                    <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
                  </svg>CL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 0 2rem;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="width: 100%; justify-content: start; align-items: center; gap: 10px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                      Projects
                    </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" target="_blank" href="https://lord02p.github.io/iphoneCalculator.githun.io/">Iphone Calculator</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://lord02p.github.io/GetLeapYear.github.io/"> Leap Year Calculator</a></li>
                                <li><a class="dropdown-item" href="index.html"> Age Calculator</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://lord02p.github.io/conveter.github.io/">Number Code Generator</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://lord02p.github.io/transformer.github.io/">Text Transformer</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://lord02p.github.io/Todos.github.io/">To Do List</a></li>


                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://github.com/lord02p" target="_blank">See My All Projects</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://www.instagram.com/bobby_yt0/?hl=en" target="_blank">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#about">About</a>
                        </li>

                    </ul>
                    <div class="shere_icons">
                        <a href="https://github.com/lord02p" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCE2VUQA6sBu4EbJVXOxI3og" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                          </svg>
                        </a>
                        <a href="https://www.facebook.com/raju.mahanta.921677/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                        </a>
                        <a href="https://www.instagram.com/bobby_yt0/?hl=en" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                        </a>


                    </div>
                    <div class="center_btn">
                        <div class="btn-group " data-bs-toggle="tooltip" data-bs-placement="bottom" title="No Theme Available">
                            <button type="button" class="btn btn-sm btn-sm dropdown-toggle button_white" data-bs-toggle="dropdown" aria-expanded="false" href="#result">
                          Thems
                        </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item">Dark Theme</a></li>
                                <li><a class="dropdown-item">Normal Theme</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </nav>
    </header>


    <main class="container mt-4">
        <form action="result.php" method="post" class="rounded">
            <h3>Age Calculator</h3>
            <p class=""> The Age Calculator can determine the age or interval between two dates. The calculated age will be displayed in years, months, weeks, days, hours, minutes, seconds and millisecounds.</p>


            <h4 class="bg_blue rounded ">Enter details</h4>
            <div class="input_div rounded p-3 mt-3">
                <div class="flex_items">
                    <!-- birth date -->
                    <div class="age_heading">
                        <h4>Date of Birth</h4>
                    </div>


                    <div class="select_div">
                        <div class="select">
                            <select class="select_CH" name="birth_month" id="birth_month">
                            <option selected value= '1'>January</option>
                            <option  value= '2' >February</option>
                            <option  value= '3'>March</option>
                            <option  value= '4'>April</option>
                            <option  value= '5'>May</option>
                            <option  value= '6'>June</option>
                            <option  value= '7'>July</option>
                            <option  value= '8'>August</option>
                            <option  value= '9'>September</option>
                            <option  value= '10'>October</option>
                            <option  value= '11'>November</option>
                            <option  value= '12'>December</option>

                       </select>
                        </div>
                        <div class="select">
                            <select name="birth_day" class="select_CH" id="birth_day">
                            <option selected value="1">1</option>
                            <option selected value="2">2</option>
                            <option selected value="3">3</option>
                            <option selected value="4">4</option>
                            <option selected value="5">5</option>
                            <option selected value="6">6</option>
                            <option selected value="7">7</option>
                            <option selected value="8">8</option>
                            <option selected value="9">9</option>
                            <option selected value="10">10</option>
                            <option selected value="11">11</option>
                            <option selected value="12">12</option>
                            <option selected value="13">13</option>
                            <option selected value="14">14</option>
                            <option selected value="15">15</option>
                            <option selected value="16">16</option>
                            <option selected value="17">17</option>
                            <option selected value="18">18</option>
                            <option selected value="19">19</option>
                            <option selected value="20">20</option>
                            <option selected value="21">21</option>
                            <option selected value="22">22</option>
                            <option selected value="23">23</option>
                            <option selected value="24">24</option>
                            <option selected value="25">25</option>
                            <option selected value="26">26</option>
                            <option selected value="27">27</option>
                            <option selected value="28">28</option>
                            <option selected value="29">29</option>
                            <option selected value="30">30</option>
                            <option selected value="31">31</option>
                       </select>
                        </div>
                        <input class="input" name="birth_year" type="number" id="birth_year" placeholder="Year" required aria-label="default input example">
                    </div>


                </div>


                <!-- to date -->
                <div class="flex_items">
                    <div class="age_heading">
                        <h4 id="result">Age at the Date of</h4>
                    </div>

                    <div class="select_div">
                        <div class="select">
                            <select class="select_CH" name="to_month" id="to_month">
                           <option selected value= '1'>January</option>
                           <option  value= '2' >February</option>
                           <option  value= '3'>March</option>
                           <option  value= '4'>April</option>
                           <option  value= '5'>May</option>
                           <option  value= '6'>June</option>
                           <option  value= '7'>July</option>
                           <option  value= '8'>August</option>
                           <option  value= '9'>September</option>
                           <option  value= '10'>October</option>
                           <option  value= '11'>November</option>
                           <option  value= '12'>December</option>

                       </select>
                        </div>
                        <div class="select">
                            <select class="select_CH" name="to_day" id="to_day">
                           <option selected value="1">1</option>
                           <option selected value="2">2</option>
                           <option selected value="3">3</option>
                           <option selected value="4">4</option>
                           <option selected value="5">5</option>
                           <option selected value="6">6</option>
                           <option selected value="7">7</option>
                           <option selected value="8">8</option>
                           <option selected value="9">9</option>
                           <option selected value="10">10</option>
                           <option selected value="11">11</option>
                           <option selected value="12">12</option>
                           <option selected value="13">13</option>
                           <option selected value="14">14</option>
                           <option selected value="15">15</option>
                           <option selected value="16">16</option>
                           <option selected value="17">17</option>
                           <option selected value="18">18</option>
                           <option selected value="19">19</option>
                           <option selected value="20">20</option>
                           <option selected value="21">21</option>
                           <option selected value="22">22</option>
                           <option selected value="23">23</option>
                           <option selected value="24">24</option>
                           <option selected value="25">25</option>
                           <option selected value="26">26</option>
                           <option selected value="27">27</option>
                           <option selected value="28">28</option>
                           <option selected value="29">29</option>
                           <option selected value="30">30</option>
                           <option selected value="31">31</option>

                       </select>
                        </div>

                        <input class="input" name="to_year" type="number" id="to_year" placeholder="Year" required aria-label="default input example">
                    </div>
                </div>

                <div class="button_div">
                    <button type="submit" class="btn  button_blue" onclick="cal()">Calculate <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right " viewBox="0 0 16 16">
                    <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                  </svg></button>
                </div>



            </div>
        </form>
        <!-- result -->


        <!-- about us -->
        <div class="mt-4" id="about">
            <h4 class="bg_blue rounded">About</h4>
            <div class="about_text p-2">
                <p>The age of a person can be counted differently in different cultures. This calculator is based on the most common age system. In this system, age grows at the birthday. For example, the age of a person that has lived for 3 years and 11
                    months is 3 and the age will turn to 4 at his/her next birthday one month later. Most western countries use this age system. <br> <br> n some cultures, age is expressed by counting years with or without including the current year.
                    For example, one person who is twenty years old is the same as one person who is in the twenty-first year of his/her life. In one of the traditional Chinese age systems, people are born at age 1 and the age grows up at the Traditional
                    Chinese New Year instead of birthday. For example, if one baby was born just one day before the Traditional Chinese New Year, 2 days later, the baby will be at age 2 even though he/she is only 2 days old. <br> <br> In some situations,
                    the months and days result of this age calculator may be confusing, especially when the starting date is the end of a month. For example, we all count Feb. 20 to March 20 to be one month. However, there are two ways to calculate the
                    age from Feb. 28, 2015 to Mar. 31, 2015. If thinking Feb. 28 to Mar. 28 as one month, then the result is one month and 3 days. If thinking both Feb. 28 and Mar. 31 as the end of the month, then the result is one month. Both calculation
                    results are reasonable. Similar situations exist for dates like Apr. 30 to May 31, May 30 to June 30, etc. The confusion comes from the uneven number of days in different months. In our calculation, we used the former method. </p>
            </div>
        </div>

        <!-- footer -->
        <div>
            <footer class=" d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top center_center  ">
                <div class="col-md-4 d-flex align-items-center  ">
                    <a href="/ " class="mb-3 me-2 mb-md-0 text-decoration-none lh-1 navbar_icon " style="color: black; ">AGE
                        <svg xmlns="http://www.w3.org/2000/svg " width="21 " height="27 " fill="currentColor " class="bi bi-calculator cal_img " style="color: black; " viewBox="0 0 16 16 ">
                            <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z "/>
                            <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0
            0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0
            0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0
            0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z "/>
                          </svg>CL</a>

                    <span class="mb-3 mb-md-0 text-muted ">&copy; 2022 Bobby, Inc</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
                    <li class="ms-3 "><a class="text-muted " href="https://github.com/lord02p" target="_blank"><svg class="bi " fill ="#286866 " width="24 " height="24 "><use xlink:href="#twitter "/> <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01
            1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82
            1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z "/></svg></a></li>
                    <li class="ms-3 "><a class="text-muted " href="https://www.youtube.com/channel/UCE2VUQA6sBu4EbJVXOxI3og" target="_blank"><svg class="bi " fill="#cd2828 " width="24 " height="24 "><use xlink:href="#instagram "/>  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22
            1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007
            2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13
            1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z "/></svg></a></li>
                    <li class="ms-3 "><a class="text-muted " href="https://www.facebook.com/raju.mahanta.921677/" target="_blank"><svg class="bi " fill="#4242db " width="24 " height="24 "><use xlink:href="#facebook "/> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347
            6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z "/></svg></a></li>
                    <li class="ms-3 "><a class="text-muted " href="https://www.instagram.com/bobby_yt0/?hl=en" target="_blank"><svg class="bi " width="24 " height="24 "><use xlink:href="#facebook "/> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927
            0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04
            1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01
            10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47
            2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233
            0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109
            0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z "/></svg></a></li>
                </ul>
            </footer>
            <a href="#top " class="btn_top "><button data-bs-toggle="tooltip" data-bs-placement="top" title="top">↑</button></a>
        </div>



    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <script src="script.js "></script>
    <script>
        var p_bar = document.getElementsByClassName('progeress_bar')[0];
        document.body.style.overflow = 'hidden';

        function loaded() {
            p_bar.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        // set default value
        var date = new Date();
        var to_day = document.getElementById('to_day');
        to_day.value = date.getDate();
        var to_month = document.getElementById('to_month');
        to_month.value = date.getMonth() + 1;
        var to_year = document.getElementById('to_year');
        to_year.value = date.getFullYear();
        var birth_day = document.getElementById('birth_day');
        birth_day.value = 13;
        var birth_month = document.getElementById('birth_month');
        birth_month.value = 4;
        var birth_year = document.getElementById('birth_year');
        birth_year.value = 2004;

        //    check input value
        setInterval(() => {
            if (to_year.value < birth_year.value) {
                to_year.style.border = '2px solid red';

            } else {
                to_year.style.border = '2px solid #5373c8';

            }
            if (birth_year.value > to_year.value) {
                birth_year.style.border = '2px solid red';
            } else {
                birth_year.style.border = '2px solid #5373c8';
            }
        }, );
    </script>

</body>

</html>