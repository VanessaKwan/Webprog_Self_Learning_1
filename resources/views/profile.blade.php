<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vanessa's Profile</title>
  <link rel="shortcut icon" href="Assets/Logo.png" type="image/x-icon">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">
</head>
<body>
  <div class="flex flex-col bg-zinc-100">
    <div id="navbar" class="dark:bg-lime-950 flex flex-row items-center fixed w-full mb-[10.75vw] z-50">
      <a href="#landingPage"><img class="mx-[0.5vw] h-[6.5vw] w-[6.5vw]"src="Assets/Logo.png" alt=""></a>
      <p class="text-white font-fasthand text-[2.1vw]">Vanessa's Profile</p>
      <div class="text-white flex flex-row text-[1.7vw] justify-items-end">
        <a href="#aboutMe" class="cursor-pointer ml-[43vw] hover:underline underline-offset-4">About Me</a>
        <a href="#skills" class="cursor-pointer ml-[7vw] hover:underline underline-offset-4">Skills</a>
        <a href="#reachMe" class="cursor-pointer ml-[7vw] hover:underline underline-offset-4">Reach Me</a>
      </div>
    </div>

    <div class="w-full h-[39vw]">
      <section id="landingPage" class="pt-[6.5vw] relative">
        <div class="h-[38.5vw] w-[68vw] z-10" id="bgImg">
          <div class="h-[29vw] w-[38vw] bg-white absolute place-items-end ml-[59.7vw] mt-[10vw] z-20">
            <p class="font-roboto text-[3.2vw] ml-[1.2vw] mt-[1.5vw]">Hi!<br>I'm Vanessa Kwandinata</p>
            <!-- <p class="text-[1.2vw] ml-[2.8vw] mt-[4.5vw] w-[33vw]">I'm a 5th semester student at BINUS University x BCA majoring in Computer Science.
              <br> I love to explore and learn new things, i have a lot of hobbies.
              Besides studying, I'm /also/ active in running extra and other organizations.
            </p> -->

            <p class="text-[1.2vw] ml-[2.5vw] mt-[5.5vw] w-[33vw] text-justify">
              I'm a 5th semester student at BINUS University x PPTI BCA majoring in Computer Science.
              I love to explore and learn new things, i have a lot of hobbies.
              Besides studying, I'm /also/ active in running extra and other organizations.
            </p>
          </div>
        </div>
      </section>
    </div>
    
    <div id="aboutMe" class="z-0">
      <section class="pt-[6.5vw] w-full h-[50vw]">
        <p class="ml-[3vw] mt-[2vw] text-[3.3vw] z-0">About Me</p>
        <div class="w-[40vw] h-[50vw] flex flex-col mt-[1vw] ml-[1vw]">
          <h1 class="text-[1.8vw] pt-[2.8vw] ml-[3vw]">Education</h1>
          <div class="flex flex-row">
            <img class="w-[1.8vw] h-[22.5vw] mt-[2.8vw] ml-[4vw]" src="Assets/Timeline2.png" alt="">
            <div>
              <p class="text-[1.3vw] ml-[1.5vw] mt-[2.5vw]">TK Setia Bhakti</p>
              <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2007 - 2009</p>
              <br>
              <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">SD Setia Bhakti</p>
              <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2009 - 2015</p>
              <br>
              <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">SMP Setia Bhakti</p>
              <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2015 - 2018</p>
              <br>
              <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">SMA Setia Bhakti</p>
              <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2018 - 2021</p>
              <br>
              <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">BINUS University x PPTI BCA</p>
              <p class="text-[1.1vw] ml-[2.8vw]">Jakarta + Sentul, 2021 - now</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div>
      <section id="skills" class="pt-[6.5vw]">
        <h1>3</h1>
      </section>
    </div>
   
    <div>
      <section id="reachMe" class="pt-[6.5vw]">
        <h1>4</h1>
      </section>
    </div>
    
  </div>
  
  
</body>
</html>