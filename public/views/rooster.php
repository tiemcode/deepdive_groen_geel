<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <script src="../js/app.js" defer></script>

<body>
    <?php require("nav.html") ?>
    <div class="container-rooster mx-auto px-6 max-w-7xl pt-60">
        <div class="dropdowns flex justify-evenly">
            <!-- dropdown -->
            <div class="relative inline-block text-left">
                <div>
                    <button type="button" class="rooster-btn inline-flex w-full justify-center rounded-md border border-gray-300 bg-primary text-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Bardienst
                        <!-- Heroicon name: mini/chevron-down -->
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="rooster-l1 rooster-list hidden absolute right-0 z-10 mt-2 max-w-sm  origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Zaterdag 4 feb</button>
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Zaterdag 11 feb</button>
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Zondag 12 feb</button>
                    </div>
                </div>
            </div>
            <!-- dropdown -->
            <div class="relative inline-block text-left">
                <div>
                    <button type="button" class="rooster-btn inline-flex w-full justify-center rounded-md border border-gray-300 bg-primary text-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Schoonmaak
                        <!-- Heroicon name: mini/chevron-down -->
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="rooster-l2 rooster-list hidden absolute right-0 z-10 mt-2 w-full origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">February</button>
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Maart</button>
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">April</button>
                    </div>
                </div>
            </div>
            <!-- dropdown -->
            <div class="relative inline-block text-left">
                <div>
                    <button type="button" class="rooster-btn inline-flex w-full justify-center rounded-md border border-gray-300 bg-primary text-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        training
                        <!-- Heroicon name: mini/chevron-down -->
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="w-full rooster-l3 rooster-list hidden absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Week 1</button>
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Week 2</button>
                        <button type="button" class="cursor-pointer text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Week 3</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="mx-auto w-fit mt-20">
            <!-- Bar rooster -->
            <div class="hidden rooster bar-rooster mt-8">
                <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th scope="col" class="py-4 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Wanneer</th>
                                    <th scope="col" class="px-3 py-4 text-left text-sm font-semibold text-gray-900">Team</th>
                                    <th scope="col" class="px-3 py-4 text-left text-sm font-semibold text-gray-900" colspan="3">Personen</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-3">11.45 - 14.15</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">za7</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Adi</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Max landkroon</td>
                                </tr>
                                <tr class="bg-neutral-100">
                                    <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-3">14.15 - 16.15</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">za6</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">jarno Wiersma</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Rick Wiersema</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Christiaan Topelen</td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-3">16.00 - 18.15</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">za2</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Gert Jan Bazuin</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Jos de Jong</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Kees Damhof</td>
                                </tr>
                                <tr class="bg-neutral-100">
                                    <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-3">18.00 - 20.30</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">za1</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Menno Pot</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">BRam Tempelaar</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Johan Molenaar</td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-3">20.15 - 22.00</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">za5</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Anne Roukema</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Erwin Kuiper</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- schoonmaak rooster -->
            <div class="rooster schoonmaak-rooster mt-8">
                <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-8 min-w-full">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th scope="col" class="py-4 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Wanneer</th>
                                    <th scope="col" class="px-3 py-4 text-left text-sm font-semibold text-gray-900">Team</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zaterdag 4 februari 2023</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zaterdag 6</td>
                                </tr>
                                <tr class="bg-neutral-100">
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zaterdag 11 februari 2023</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Dames 2</td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zondag 12 februari 2023</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zondag 4</td>
                                </tr>
                                <tr class="bg-neutral-100">
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zaterdag 18 februari 2023</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zaterdag 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- training rooster -->
            <div class="rooster training-rooster mt-8 hidden">
                <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-8 min-w-full">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th scope="col" class="py-4 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Wanneer</th>
                                    <th scope="col" class="px-3 py-4 text-left text-sm font-semibold text-gray-900">Team</th>
                                    <th scope="col" class="px-3 py-4 text-left text-sm font-semibold text-gray-900">Veld</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">19.30 - 21.00</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zaterdag 3</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Kunstgrasveld 7A</td>
                                </tr>
                                <tr class="bg-neutral-100">
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">19.30 - 21.00</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Zaterdag 7</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Kunstgrasveld 7B</td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">20.30 - 22.00</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Dames 1</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Kunstgrasveld 6B</td>
                                </tr>
                                <tr class="bg-neutral-100">
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">20.30 - 22.00</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Dames 5</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Kunstgrasveld 6a</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('footer.html') ?>
</body>

</html>