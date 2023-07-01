<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Leave | FormTechHostel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section class="bg-slate-900 text-white px-20 py-7 flex justify-center">
        <div>
            <p class="text-3xl font-[poppins] font-medium">FormTechHostel</p>
        </div>
    </section>

    <section class="">
        <div class="mb-10">
        <h2 class="font-[poppins] flex justify-center text-2xl pt-7 font-bold">Apply for Leave - FormTechHostel</h2>
        </div>
       <div class="flex justify-center">
       <form class="w-full max-w-lg" action="pdf.php" method="POST">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-slate-700 text-xs font-bold mb-2" for="grid-first-name">
        First Name
      </label>
      <input name="fname" class="appearance-none block w-full bg-gray-200 text-slate-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input name="lname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Reason
      </label>
      <input name="reason" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="Text" placeholder="Enter your Reason">
      <p class="text-gray-600 text-xs italic">Give your reason</p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Roll no.
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="roll" placeholder="Roll no.">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Leave Date
      </label>
      <div class="relative">
        <input type="date" name="ldate" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Return Date
      </label>
      <div class="relative">
        <input type="date" name="rdate" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
    </div>
    <button type="submit" class="p-5 bg-slate-900 text-white my-10 mx-3 hover:bg-slate-200 hover:text-slate-900 rounded-2xl" name="submit" id="button">Submit your application</button>
  </div>
</form>
       </div>
        
    </section>
</body>
</html>