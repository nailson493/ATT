<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#" aria-label="Home">
                    <img class="w-20 ml-8" src="img/logo.png" alt="">
                </a>
            </div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                    <input aria-label="search" type="search" id="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">link</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>


<main>

  <div class="flex flex-col md:flex-row">
        <nav aria-label="alternative nav">
            <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">
                <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Agendamentos</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="painel.php?r=menu" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fas fa-chart-area pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Analytics</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Payments</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" id="dropdownDefault" data-dropdown-toggle="dropdown" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa-solid fa-clipboard-list pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Pedidos</span>
                            </a>
                        
        <!-- Dropdown menu -->
                                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="painel.php?r=concluidos" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Concluidos</a>
                                </li>
                                <li>
                                    <a href="painel.php?r=cancelados" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cancelados</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                                </ul>
                            </div>
                         </li>
                    </ul>
                </div>


            </div>
      </nav>
        <section class="w-full">
          <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                      <h1 class="font-bold pl-2">Pedidos Cancelados</h1>
                  </div>
          </div>


                <div  class="flex flex-row flex-wrap flex-grow mt-2 ml-14 ">
                    <div  class="mt-10 sm:mt-0 ">
                        <div id="full" class="md:grid md:grid-cols-3 md:gap-6">
                            <div  class="mt-5 md:col-span-2 md:mt-0  ">
                                <form  action="#" method="POST">
                                    <div  class="overflow-hidden shadow sm:rounded-md ">
                                      <div  class="bg-white px-4 py-5 sm:p-6">
                                                <div  class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-3">
                                                        <label for="establecimento-name" class="block text-sm font-medium text-gray-700">Nome</label>
                                                        <input type="text" name="estabelecimento-name" id="estabelecimento-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                                        </div>
                                        
                                                        <div class="col-span-6 sm:col-span-1">
                                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Abre</label>
                                                        <input type="time" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-1">
                                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                        <input type="time" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                        
                                                        <!-- <div class="col-span-6 sm:col-span-4">
                                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                                        <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div> -->
                                                    
                                                        <div class="col-span-6 sm:col-span-3">
                                                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                            <option>United States</option>
                                                            <option>Canada</option>
                                                            <option>Mexico</option>
                                                        </select>
                                                        </div>
                                        
                                                        <div class="col-span-3">
                                                        <label for="street-address" class="block text-sm font-medium text-gray-700">Endereço</label>
                                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>

                                                        <div class="col-span-3">
                                                        <label for="street-address" class="block text-sm font-medium text-gray-700">Bairro</label>
                                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                        
                                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                        <label for="city" class="block text-sm font-medium text-gray-700">Cidade</label>
                                                        <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                        
                                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                        <label for="region" class="block text-sm font-medium text-gray-700">Estado</label>
                                                        <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                        
                                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">Cep</label>
                                                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                                    </div>
                                       

                                                        <div class="grid grid-cols-3 gap-4 w-[32rem] mb-4 mt-10 justify-start">
                                                            <div class="col-span-1">
                                                                <label for="week-day" class="block text-sm font-medium text-gray-700">Segunda</label>
                                                                <select id="monday" name="monday" autocomplete="monday-name" onchange="openAndClosed('monday','open-monday','closed-monday')" class="mt-1 block w-full rounded-md border w-full border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                    <option value="open" >Aberto</option>
                                                                    <option value="closed" >Fechado</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-1">
                                                                <label for="open-monday" class="block text-sm font-medium text-gray-700">Abre</label>
                                                                <input type="time" name="open-monday" id="open-monday" autocomplete="week-name" value="08:00" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <div class="col-span-6 sm:col-span-1">
                                                                    <label for="week-day" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                                    <input type="time" name="closed-monday" id="closed-monday" autocomplete="week-name" value="18:30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                    </div>
                                                              <!-- ... -->
                                                              <div class="col-span-1">
                                                                <label for="week-day" class="block text-sm font-medium text-gray-700">Terça</label>
                                                                <select id="tuesday" name="tuesday" autocomplete="tuesday-name" onchange="openAndClosed('tuesday','open-tuesday','closed-tuesday')" class="mt-1 block w-full rounded-md border w-full border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                    <option value="open" >Aberto</option>
                                                                    <option value="closed" >Fechado</option>
                                                                </select>
                                                              </div>
                                                              <div class="col-span-6 sm:col-span-1">
                                                                <label for="open-tuesday" class="block text-sm font-medium text-gray-700">Abre</label>
                                                                <input type="time" name="open-tuesday" id="open-tuesday" autocomplete="week-name" value="08:00" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <div class="col-span-6 sm:col-span-1">
                                                                    <label for="week-day" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                                    <input type="time" name="closed-tuesday" id="closed-tuesday" autocomplete="week-name" value="18:30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <!-- ... -->
                                                                <div class="col-span-1">
                                                                <label for="week-day" class="block text-sm font-medium text-gray-700">Quarta</label>
                                                                <select id="wednesday" name="wednesday" autocomplete="wednesday-name" onchange="openAndClosed('wednesday','open-wednesday','closed-wednesday')" class="mt-1 block w-full rounded-md border w-full border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                    <option value="open" >Aberto</option>
                                                                    <option value="closed" >Fechado</option>
                                                                </select>
                                                              </div>
                                                              <div class="col-span-6 sm:col-span-1">
                                                                <label for="open-wednesday" class="block text-sm font-medium text-gray-700">Abre</label>
                                                                <input type="time" name="open-wednesday" id="open-wednesday" autocomplete="week-name" value="08:00" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <div class="col-span-6 sm:col-span-1">
                                                                    <label for="week-day" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                                    <input type="time" name="closed-wednesday" id="closed-wednesday" autocomplete="week-name" value="18:30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <!-- ... -->
                                                                <div class="col-span-1">
                                                                <label for="week-day" class="block text-sm font-medium text-gray-700">Quinta</label>
                                                                <select id="thursday" name="thursday" autocomplete="thursday-name" onchange="openAndClosed('thursday','open-thursday','closed-thursday')" class="mt-1 block w-full rounded-md border w-full border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                    <option value="open" >Aberto</option>
                                                                    <option value="closed" >Fechado</option>
                                                                </select>
                                                              </div>
                                                              <div class="col-span-6 sm:col-span-1">
                                                                <label for="open-thursday" class="block text-sm font-medium text-gray-700">Abre</label>
                                                                <input type="time" name="open-thursday" id="open-thursday" autocomplete="week-name" value="08:00" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <div class="col-span-6 sm:col-span-1">
                                                                    <label for="week-day" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                                    <input type="time" name="closed-thursday" id="closed-thursday" autocomplete="week-name" value="18:30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <!-- ... -->
                                                                <div class="col-span-1">
                                                                <label for="week-day" class="block text-sm font-medium text-gray-700">Sexta</label>
                                                                <select id="friday" name="friday" autocomplete="friday-name" onchange="openAndClosed('friday','open-friday','closed-friday')" class="mt-1 block w-full rounded-md border w-full border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                    <option value="open" >Aberto</option>
                                                                    <option value="closed" >Fechado</option>
                                                                </select>
                                                              </div>
                                                              <div class="col-span-6 sm:col-span-1">
                                                                <label for="open-friday" class="block text-sm font-medium text-gray-700">Abre</label>
                                                                <input type="time" name="open-friday" id="open-friday" autocomplete="week-name" value="08:00" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <div class="col-span-6 sm:col-span-1">
                                                                    <label for="week-day" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                                    <input type="time" name="closed-friday" id="closed-friday" autocomplete="week-name" value="18:30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <!-- ... -->
                                                                <div class="col-span-1">
                                                                <label for="week-day" class="block text-sm font-medium text-gray-700">Sabado</label>
                                                                <select id="saturday" name="saturday" autocomplete="saturday-name" onchange="openAndClosed('saturday','open-saturday','closed-saturday')" class="mt-1 block w-full rounded-md border w-full border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                    <option value="open" >Aberto</option>
                                                                    <option value="closed" >Fechado</option>
                                                                </select>
                                                              </div>
                                                              <div class="col-span-6 sm:col-span-1">
                                                                <label for="open-saturday" class="block text-sm font-medium text-gray-700">Abre</label>
                                                                <input type="time" name="open-saturday" id="open-saturday" autocomplete="week-name" value="08:00" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <div class="col-span-6 sm:col-span-1">
                                                                    <label for="week-day" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                                    <input type="time" name="closed-saturday" id="closed-saturday" autocomplete="week-name" value="18:30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <!-- ... -->
                                                                <div class="col-span-1">
                                                                <label for="week-day" class="block text-sm font-medium text-gray-700">Domingo</label>
                                                                <select id="sunday" name="sunday" autocomplete="sunday-name" onchange="openAndClosed('sunday','open-sunday','closed-sunday')" class="mt-1 block w-full rounded-md border w-full border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                    <option value="open" >Aberto</option>
                                                                    <option value="closed" >Fechado</option>
                                                                </select>
                                                              </div>
                                                              <div class="col-span-6 sm:col-span-1">
                                                                <label for="open-sunday" class="block text-sm font-medium text-gray-700">Abre</label>
                                                                <input type="time" name="open-sunday" id="open-sunday" autocomplete="week-name" value="08:00" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>
                                                                <div class="col-span-6 sm:col-span-1">
                                                                    <label for="week-day" class="block text-sm font-medium text-gray-700">Fecha</label>
                                                                    <input type="time" name="closed-sunday" id="closed-sunday" autocomplete="week-name" value="18:30" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                </div>                                                                                                                                                    
                                                        </div>                                                                                
                                      
                                      
                                                      
                                      
                                          <div class="ml-5 mt-8"> 
                                            <div class="col-span-2 "> 
                                                <label for="city" class="block text-sm font-medium text-green-700">Estilo</label>
                                                <input type="text" name="estilo" id="estilo" autocomplete="address-level2" class="mt-1 block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                            <div class="col-span-2 "> 
                                                <label for="city" class="block text-sm font-medium text-green-700">Tempo</label>
                                                <input type="time" step="2" name="tempo" id="tempo" autocomplete="address-level2" class="mt-1 block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>                                    
                                                <div class="w-96 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-100 rounded-t-lg -pt-1 mt-4">
                                                    <button type="button" class="relative ml-4 top-4 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" onclick="myFunction()">Limpar</button>
                                                    <button type="button" class=" ml-[17rem] -top-8 relative text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" onclick="addRow();">Adicionar</button>
                                                </div>
                                                <div class="flex justify-start -mt-5">
                                                    <table class="w-96 text-sm text-left text-gray-100 dark:text-gray-100 border border-black ">
                                                        <thead class="bg-white border-b dark:bg-gray-300 dark:border-gray-700  ">
                                                            <tr>
                                                                <th  scope="row" class="py-4 px-6 font-medium text-black whitespace-nowrap dark:text-black ">Estilo</th>
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black ">Tempo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="result">
                                                            <tr class="bg-white border-b dark:bg-gray-100 dark:border-gray-700">
                                                                
                                                      
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>                       
                                            
                                                <div class="grid gap-4 grid-cols-2 mt-10">
  <div>
  

  <label class="inline-flex relative items-center cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer">
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Ar-Condicionado</span>
</label>


  </div>
  <div>
  <label class="inline-flex relative items-center cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer">
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Wifi</span>
</label>
  </div>
  <div>
  <label class="inline-flex relative items-center cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer">
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Frigobar</span>
</label>


  </div>
<div>
    <label class="inline-flex relative items-center cursor-pointer">
      <input type="checkbox" value="" class="sr-only peer">
      <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
      <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Televisão</span>
  </label>
</div>
<div>
    <label class="inline-flex relative items-center cursor-pointer">
      <input type="checkbox" value="" class="sr-only peer">
      <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
      <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Televisão</span>
  </label>
</div>
<div>
    <label class="inline-flex relative items-center cursor-pointer">
      <input type="checkbox" value="" class="sr-only peer">
      <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
      <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Televisão</span>
  </label>
</div>
</div>









                                              </div>
                                      
                                      
                                          <div class=" sm:px-8 md:px-16 sm:py-8 -ml-12">
                                <main class="container mx-auto max-w-screen-lg h-full">
                                  <!-- file upload modal -->
                                  <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                                    <!-- overlay -->
                                    <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                      <i>
                                        <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                          <path d="M19.4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV4h-3v4h-2v-4h-3l4-4z" />
                                        </svg>
                                      </i>
                                      <p class="text-lg text-blue-700">Drop files to upload</p>
                                    </div>

                                    <!-- scroll area -->
                                    <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                                      <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                        <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                          <span>Arraste e solte suas</span>&nbsp;<span>fotos aqui ou</span>
                                        </p>
                                        <input id="hidden-input" type="file" multiple class="hidden" />
                                        <button id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                          Upload a file
                                        </button>
                                      </header>

                                      <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                        To Upload
                                      </h1>

                                      <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                        <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                          <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
                                          <span class="text-small text-gray-500">No files selected</span>
                                        </li>
                                      </ul>
                                    </section>

                                    <!-- sticky footer -->
                                    <footer class="flex justify-end px-8 pb-8 pt-4">
                                      <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                                        Upload now
                                      </button>
                                      <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                        Cancel
                                      </button>
                                    </footer>
                                  </article>
                                <!-- </main> -->
                              </div>

                              <!-- using two similar templates for simplicity in js code -->
                              <template id="file-template">
                                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                  <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                    <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                                    <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                      <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                      <div class="flex">
                                        <span class="p-1 text-blue-800">
                                          <i>
                                            <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                              <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                            </svg>
                                          </i>
                                        </span>
                                        <p class="p-1 size text-xs text-gray-700"></p>
                                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                          <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                          </svg>
                                        </button>
                                      </div>
                                    </section>
                                  </article>
                                </li>
                              </template>

                              <template id="image-template">
                                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                  <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                    <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                    <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                      <h1 class="flex-1"></h1>
                                      <div class="flex">
                                        <span class="p-1">
                                          <i>
                                            <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                              <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                            </svg>
                                          </i>
                                        </span>

                                        <p class="p-1 size text-xs"></p>
                                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                          <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                          </svg>
                                        </button>
                                      </div>
                                    </section>
                                  </article>
                                </li>
                              </template>
                                        
                              <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>                                     
                              </div>                                                                          
                            </div>


                                        </div>
                     
                                       

                                        
                                <!--  -->
                                          
                                      
                                      
                                      </div>
                                          
                                    
                                    
                                      </div>
                                

                                
                                
                                  </form>
                            </div>
                          
                          </div>
                    
                      </div>
              </div>
</div>

</div>
</main>





                <!-- component -->
<?php include "js.php"; ?>

<script>
const fileTempl = document.getElementById("file-template"),
  imageTempl = document.getElementById("image-template"),
  empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
  const isImage = file.type.match("image.*"),
    objectURL = URL.createObjectURL(file);

  const clone = isImage
    ? imageTempl.content.cloneNode(true)
    : fileTempl.content.cloneNode(true);

  clone.querySelector("h1").textContent = file.name;
  clone.querySelector("li").id = objectURL;
  clone.querySelector(".delete").dataset.target = objectURL;
  clone.querySelector(".size").textContent =
    file.size > 1024
      ? file.size > 1048576
        ? Math.round(file.size / 1048576) + "mb"
        : Math.round(file.size / 1024) + "kb"
      : file.size + "b";

  isImage &&
    Object.assign(clone.querySelector("img"), {
      src: objectURL,
      alt: file.name
    });

  empty.classList.add("hidden");
  target.prepend(clone);

  FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
  overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
  for (const file of e.target.files) {
    addFile(gallery, file);
  }
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
  types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
  ev.preventDefault();
  for (const file of ev.dataTransfer.files) {
    addFile(gallery, file);
    overlay.classList.remove("draggedover");
    counter = 0;
  }
}

// only react to actual files being dragged
function dragEnterHandler(e) {
  e.preventDefault();
  if (!hasFiles(e)) {
    return;
  }
  ++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
  1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
  if (hasFiles(e)) {
    e.preventDefault();
  }
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
  if (target.classList.contains("delete")) {
    const ou = target.dataset.target;
    document.getElementById(ou).remove(ou);
    gallery.children.length === 1 && empty.classList.remove("hidden");
    delete FILES[ou];
  }
};

// print all selected files
document.getElementById("submit").onclick = () => {
  alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
  console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = () => {
  while (gallery.children.length > 0) {
    gallery.lastChild.remove();
  }
  FILES = {};
  empty.classList.remove("hidden");
  gallery.append(empty);
};

</script>

<style>
.hasImage:hover section {
  background-color: rgba(5, 5, 5, 0.4);
}
.hasImage:hover button:hover {
  background: rgba(5, 5, 5, 0.45);
}

#overlay p,
i {
  opacity: 0;
}

#overlay.draggedover {
  background-color: rgba(255, 255, 255, 0.7);
}
#overlay.draggedover p,
#overlay.draggedover i {
  opacity: 1;
}

.group:hover .group-hover\:text-blue-800 {
  color: #2b6cb0;
}
</style>









<script>
    const fileTempl = document.getElementById("file-template"),
    imageTempl = document.getElementById("image-template"),
    empty = document.getElementById("empty");

    // use to store pre selected files
    let FILES = {};

    // check if file is of type image and prepend the initialied
    // template to the target element
    function addFile(target, file) {
    const isImage = file.type.match("image.*"),
        objectURL = URL.createObjectURL(file);

    const clone = isImage
        ? imageTempl.content.cloneNode(true)
        : fileTempl.content.cloneNode(true);

    clone.querySelector("h1").textContent = file.name;
    clone.querySelector("li").id = objectURL;
    clone.querySelector(".delete").dataset.target = objectURL;
    clone.querySelector(".size").textContent =
        file.size > 1024
        ? file.size > 1048576
            ? Math.round(file.size / 1048576) + "mb"
            : Math.round(file.size / 1024) + "kb"
        : file.size + "b";

    isImage &&
        Object.assign(clone.querySelector("img"), {
        src: objectURL,
        alt: file.name
        });

    empty.classList.add("hidden");
    target.prepend(clone);

    FILES[objectURL] = file;
    }

    const gallery = document.getElementById("gallery"),
    overlay = document.getElementById("overlay");

    // click the hidden input of type file if the visible button is clicked
    // and capture the selected files
    const hidden = document.getElementById("hidden-input");
    document.getElementById("button").onclick = () => hidden.click();
    hidden.onchange = (e) => {
    for (const file of e.target.files) {
        addFile(gallery, file);
    }
    };

    // use to check if a file is being dragged
    const hasFiles = ({ dataTransfer: { types = [] } }) =>
    types.indexOf("Files") > -1;

    // use to drag dragenter and dragleave events.
    // this is to know if the outermost parent is dragged over
    // without issues due to drag events on its children
    let counter = 0;

    // reset counter and append file to gallery when file is dropped
    function dropHandler(ev) {
    ev.preventDefault();
    for (const file of ev.dataTransfer.files) {
        addFile(gallery, file);
        overlay.classList.remove("draggedover");
        counter = 0;
    }
    }

    // only react to actual files being dragged
    function dragEnterHandler(e) {
    e.preventDefault();
    if (!hasFiles(e)) {
        return;
    }
    ++counter && overlay.classList.add("draggedover");
    }

    function dragLeaveHandler(e) {
    1 > --counter && overlay.classList.remove("draggedover");
    }

    function dragOverHandler(e) {
    if (hasFiles(e)) {
        e.preventDefault();
    }
    }

    // event delegation to caputre delete events
    // fron the waste buckets in the file preview cards
    gallery.onclick = ({ target }) => {
    if (target.classList.contains("delete")) {
        const ou = target.dataset.target;
        document.getElementById(ou).remove(ou);
        gallery.children.length === 1 && empty.classList.remove("hidden");
        delete FILES[ou];
    }
    };

    // print all selected files
    document.getElementById("submit").onclick = () => {
    alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
    console.log(FILES);
    };

    // clear entire selection
    document.getElementById("cancel").onclick = () => {
    while (gallery.children.length > 0) {
        gallery.lastChild.remove();
    }
    FILES = {};
    empty.classList.remove("hidden");
    gallery.append(empty);
    };

</script>



               

                </div>
            </div>
        </section>
    </div>
</main>




<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>



