@extends('welcome')
@section('content')

    <nav class="flex justify-center mt-1" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{route('home')}}"
                   class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Accueil
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{route('contribution')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">XP de Guilde</a>
                </div>
            </li>
        </ol>
    </nav>


    <div class="grid md:grid-cols-2 gap-8 mx-8">
        <table class="forumline table1 bg3" cellpadding="0" cellspacing="0">
            <caption class="p-5 text-lg font-semibold text-center text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Niveaux de guilde
                </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-center">
                <th scope="col" class="py-3 px-6 text-center">
                    Niveau
                </th>
                <th scope="col" class="py-3 px-6 text-center">
                    Expérience IQ
                </th>
                <th scope="col" class="py-3 px-6 text-center">
                    Contribution penya
                </th>
                <th scope="col" class="py-3 px-6 text-center">
                    Nombre de places
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">0</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">0</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">30</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">24</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">5 200</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">30</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">3</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span style="color: #9ca3af">205</span></span>
                </td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">14 625</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">32</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">4</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span style="color: #9ca3af">485</span></span>
                </td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">34 666</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">32</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">5</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 353</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">58 035</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">34</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">6</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 338</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">100 285</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">34</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">7</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">4 547</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">139 343</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">36</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">8</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">6 788</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">208 000</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">36</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">9</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">11 045</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">263 250</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">38</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">10</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">15 151</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">361 110</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">38</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">11</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">22 183</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">432 575</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">40</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">12</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">28 800</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">561 600</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">40</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">13</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">39 340</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">649 113</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">42</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">14</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">49 135</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">810 727</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">42</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">15</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">63 920</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">914 063</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">44</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">16</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">71 608</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 024 000</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">44</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">17</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">84 365</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 064 483</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">46</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">18</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">91 041</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 148 727</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">46</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">19</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">109 698</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 238 429</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">48</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">20</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">115 152</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 300 000</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">48</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">21</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">134 545</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 443 000</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">49</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">22</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">156 813</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 601 730</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">50</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">23</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">182 351</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 777 920</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">51</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">24</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">211 610</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 973 491</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">52</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">25</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">245 099</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 190 574</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">53</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">26</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">283 396</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 431 537</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">54</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">27</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">327 152</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 699 005</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">55</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">28</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">377 106</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 995 896</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">56</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">29</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">434 090</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">3 325 443</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">57</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">30</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">499 049</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">3 691 241</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">58</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">31</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">573 046</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">4 097 276</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">59</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">32</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">657 283</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">4 547 976</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">60</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">33</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">753 119</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">5 048 252</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">61</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">34</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">862 086</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">5 603 559</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">62</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">35</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">985 913</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">6 219 950</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">63</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">36</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 126 550</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">6 904 144</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">64</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">37</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 286 198</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">7 663 599</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">65</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">38</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 467 338</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">8 506 594</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">66</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">39</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 672 765</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">9 442 319</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">67</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">40</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">1 905 631</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">10 480 973</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">68</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">41</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 169 488</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">11 633 879</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">69</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">42</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 468 335</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">12 913 606</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">70</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">43</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">2 806 677</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">14 334 102</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">71</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">44</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">3 189 588</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">15 910 852</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">72</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">45</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">3 622 778</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">17 661 045</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">73</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">46</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">4 112 677</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">19 603 760</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">74</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">47</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">4 666 517</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">21 760 172</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">75</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">48</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">5 292 439</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">24 153 791</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">76</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">49</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">5 999 599</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">26 810 707</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">77</span></span></td>
            </tr>
            <tr class="text-center">
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">50</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">7 075 777</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">29 759 885</span></span></td>
                <td class="row3" colspan="1" rowspan="1"><span class="postbody"><span
                            style="color: #9ca3af">80</span></span></td>
            </tr>
            </tbody>
        </table>
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-center text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Items de quêtes / Loots de monstres
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="py-3 px-6 text-center">
                        Nom de l'objet
                    </th>
                    <th scope="col" class="py-3 px-6 text-center">
                        Monstre
                    </th>
                    <th scope="col" class="py-3 px-6 text-center">
                        Contribution de guilde
                    </th>
                    <th scope="col" class="py-3 px-6 text-center">
                        Nourriture
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-center">
                    <td><a href="Twinkle_Stone" title="Twinkle Stone">Twinkle Stone</a>
                    </td>
                    <td align="center"><a href="Aibatt.html" title="Aibatt">Aibatt</a>
                    </td>
                    <td align="center">1
                    </td>
                    <td align="center">7 ~ 14
                    </td>
                </tr>
                <tr class="text-center">
                    <td></a> <a
                            href="Forform.html" title="Forform">Forform</a>
                    </td>
                    <td align="center"><a href="Mushpang.html" title="Mushpang">Mushpang</a>
                    </td>
                    <td align="center">2
                    </td>
                    <td align="center">7 ~ 14
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Palin.html" title="Palin">Palin</a>
                    </td>
                    <td align="center"><a href="Burudeng.html" title="Burudeng">Burudeng</a>
                    </td>
                    <td align="center">3
                    </td>
                    <td align="center">7 ~ 14
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Chupim.html" title="Chupim">Chupim</a>
                    </td>
                    <td align="center"><a href="Pukepuke.html" title="Pukepuke">Pukepuke</a>
                    </td>
                    <td align="center">4
                    </td>
                    <td align="center">7 ~ 14
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="PeakyRind.html" title="PeakyRind">PeakyRind</a>
                    </td>
                    <td align="center"><a href="Peakyturtle.html" title="Peakyturtle">Peakyturtle</a>
                    </td>
                    <td align="center">4
                    </td>
                    <td align="center">7 ~ 14
                    </td>
                </tr>
                <tr class="text-center">
                    <td></a>
                        <a href="Teddy_Bear.html" title="Teddy Bear">Teddy Bear</a>
                    </td>
                    <td align="center"><a href="Demian.html" title="Demian">Demian</a>
                    </td>
                    <td align="center">5
                    </td>
                    <td align="center">7 ~ 14
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Poporam.html" title="Poporam">Poporam</a>
                    </td>
                    <td align="center"><a href="Doridoma.html" title="Doridoma">Doridoma</a>
                    </td>
                    <td align="center">6
                    </td>
                    <td align="center">7 ~ 14
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Fangs.html" title="Fangs">Fangs</a>
                    </td>
                    <td align="center"><a href="Lawolf.html" title="Lawolf">Lawolf</a>
                    </td>
                    <td align="center">7
                    </td>
                    <td align="center">18 ~ 35
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Tarin_Root.html" title="Tarin Root">Tarin Root</a>
                    </td>
                    <td align="center"><a href="Fefern.html" title="Fefern">Fefern</a>
                    </td>
                    <td align="center">8
                    </td>
                    <td align="center">18 ~ 34
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Star_Stone.html" title="Star Stone">Star Stone</a>
                    </td>
                    <td align="center"><a href="NyangNyang.html" title="NyangNyang">NyangNyang</a>
                    </td>
                    <td align="center">9
                    </td>
                    <td align="center">18 ~ 35
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Golden_Wing.html" title="Golden Wing">Golden Wing</a>
                    </td>
                    <td align="center"><a href="Bang.html" title="Bang">Bang</a>
                    </td>
                    <td align="center">10
                    </td>
                    <td align="center">25 ~ 50
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Bug_Skin.html" title="Bug Skin">Bug Skin</a>
                    </td>
                    <td align="center"><a href="Yggdrasil_Armor_Bug.html" title="Yggdrasil Armor Bug">Yggdrasil Armor
                            Bug</a>
                    </td>
                    <td align="center">86
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Naiphin%27s_Tree_Branch.html" title="Naiphin's Tree Branch">Naiphin's Tree Branch</a>
                    </td>
                    <td align="center"><a href="Yggdrasil_Ant.html" title="Yggdrasil Ant">Yggdrasil Ant</a>
                    </td>
                    <td align="center">86
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Ant_Juice.html" title="Ant Juice">Ant Juice</a>
                    </td>
                    <td align="center"><a href="Naiphin.html" title="Naiphin">Naiphin</a>
                    </td>
                    <td align="center">86
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Hard_Tree_Branch.html" title="Hard Tree Branch">Hard
                            Tree Branch</a>
                    </td>
                    <td align="center"><a href="Angry_Naiphin.html" title="Angry Naiphin">Angry Naiphin</a> &amp; <a
                            href="Huge_Naiphin.html" title="Huge Naiphin">Huge Naiphin</a>
                    </td>
                    <td align="center">86
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Guardian_Ant%27s_Jaw.html" title="Guardian Ant's Jaw">Guardian
                            Ant's Jaw</a>
                    </td>
                    <td align="center"><a href="Yggdrasil_Guardian_Ant.html" title="Yggdrasil Guardian Ant">Yggdrasil
                            Guardian Ant</a>
                    </td>
                    <td align="center">86
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Purified_Dryad%27s_Spirit.html" title="Purified Dryad's Spirit">Purified Dryad's
                            Spirit</a>
                    </td>
                    <td align="center"><a href="Contaminated_Dryad.html" title="Contaminated Dryad">Contaminated
                            Dryad</a>
                    </td>
                    <td align="center">86
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td></a>
                        <a href="Purified_Yggdrasil_Tree_Branch.html" title="Purified Yggdrasil Tree Branch">Purified
                            Yggdrasil Tree Branch</a>
                    </td>
                    <td align="center"><a href="Contaminated_Yggdrasil_Tree_Branch.html"
                                          title="Contaminated Yggdrasil Tree Branch">Contaminated Yggdrasil Tree
                            Branch</a>
                    </td>
                    <td align="center">86
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Big_Nipper.html" title="Big Nipper">Big Nipper</a>
                    </td>
                    <td align="center"><a href="Kingster.html" title="Kingster">Kingster</a>
                    </td>
                    <td align="center">22
                    </td>
                    <td align="center">54~100
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Ink_Pouch.html" title="Ink Pouch">Ink Pouch</a>
                    </td>
                    <td align="center"><a href="Kraken.html" title="Kraken">Kraken</a>
                    </td>
                    <td align="center">23
                    </td>
                    <td align="center">74~146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Crab_Shell.html" title="Crab Shell">Crab Shell</a>
                    </td>
                    <td align="center"><a href="Creper.html" title="Creper">Creper</a>
                    </td>
                    <td align="center">25
                    </td>
                    <td align="center">75~146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Crumbly_Hair.html" title="Crumbly Hair">Crumbly Hair</a>
                    </td>
                    <td align="center"><a href="Naga.html" title="Naga">Naga</a>
                    </td>
                    <td align="center">26
                    </td>
                    <td align="center">74~146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Broken_Wing.html" title="Broken Wing">Broken Wing</a>
                    </td>
                    <td align="center"><a href="Atrox.html" title="Atrox">Atrox</a>
                    </td>
                    <td align="center">28
                    </td>
                    <td align="center">74~146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Great_Crown.html" title="Great Crown">Great Crown</a>
                    </td>
                    <td align="center"><a href="Okean.html" title="Okean">Okean</a>
                    </td>
                    <td align="center">29
                    </td>
                    <td align="center">74~146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Sharp_Canine.html" title="Sharp Canine">Sharp Canine</a>
                    </td>
                    <td align="center"><a href="Tigar.html" title="Tigar">Tigar</a>
                    </td>
                    <td align="center">31
                    </td>
                    <td align="center">108~203
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Keen_Tooth.html" title="Keen Tooth">Keen Tooth</a>
                    </td>
                    <td align="center"><a href="Dorian.html" title="Dorian">Dorian</a>
                    </td>
                    <td align="center">32
                    </td>
                    <td align="center">108~203
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Gogloo.html" title="Gogloo">Gogloo</a>
                    </td>
                    <td align="center"><a href="Meral.html" title="Meral">Meral</a>
                    </td>
                    <td align="center">34
                    </td>
                    <td align="center">108~203
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Red_Crystal.html" title="Red Crystal">Red Crystal</a>
                    </td>
                    <td align="center"><a href="Yetti.html" title="Yetti">Yetti</a><br><a href="Mutant_Yetti.html"
                                                                                          title="Mutant Yetti">Mutant
                            Yetti</a>
                    </td>
                    <td align="center">39
                    </td>
                    <td align="center">229 ~ 418
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Yellow_Crystal.html" title="Yellow Crystal">Yellow
                            Crystal</a>
                    </td>
                    <td align="center"><a href="Augu.html" title="Augu">Augu</a><br><a href="Mutant_Augu.html"
                                                                                       title="Mutant Augu">Mutant
                            Augu</a>
                    </td>
                    <td align="center">45
                    </td>
                    <td align="center">219 ~ 424
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Green_Crystal.html" title="Green Crystal">Green Crystal</a>
                    </td>
                    <td align="center"><a href="Ghost_of_the_Forgotten_Prince.html"
                                          title="Ghost of the Forgotten Prince">Ghost
                            of the Forgotten Prince</a><br><a href="Ghost_of_the_Forgotten_King.html"
                                                              title="Ghost of the Forgotten King">Ghost of the Forgotten
                            King</a>
                    </td>
                    <td align="center">51
                    </td>
                    <td align="center">151 ~ 294
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Blue_Crystal.html" title="Blue Crystal">Blue Crystal</a>
                    </td>
                    <td align="center"><a href="Mammoth.html" title="Mammoth">Mammoth</a><br><a
                            href="Cannibal_Mammoth.html"
                            title="Cannibal Mammoth">Cannibal
                            Mammoth</a>
                    </td>
                    <td align="center">57
                    </td>
                    <td align="center">214 ~ 424
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Cat_Bell.html" title="Cat Bell">Cat Bell</a>
                    </td>
                    <td align="center"><a href="Catsy.html" title="Catsy">Catsy</a>
                    </td>
                    <td align="center">31
                    </td>
                    <td align="center">104 ~ 195
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Harpy_Feather.html" title="Harpy Feather">Harpy Feather</a>
                    </td>
                    <td align="center"><a href="Harpy.html" title="Harpy">Harpy</a>
                    </td>
                    <td align="center">34
                    </td>
                    <td align="center">104 ~ 207
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Gullah_Mud.html" title="Gullah Mud">Gullah Mud</a>
                    </td>
                    <td align="center"><a href="Gullah.html" title="Gullah">Gullah</a>
                    </td>
                    <td align="center">37
                    </td>
                    <td align="center">104 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Snake_Tongue.html" title="Snake Tongue">Snake Tongue</a>
                    </td>
                    <td align="center"><a href="Abraxas.html" title="Abraxas">Abraxas</a>
                    </td>
                    <td align="center">40
                    </td>
                    <td align="center">104 ~ 207
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Hague_Nail.html" title="Hague Nail">Hague Nail</a>
                    </td>
                    <td align="center"><a href="Hague.html" title="Hague">Hague</a>
                    </td>
                    <td align="center">43
                    </td>
                    <td align="center">104 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Tengu_Bill.html" title="Tengu Bill">Tengu Bill</a>
                    </td>
                    <td align="center"><a href="Tengu.html" title="Tengu">Tengu</a>
                    </td>
                    <td align="center">46
                    </td>
                    <td align="center">149 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Horn_of_Asterius.html" title="Horn of Asterius">Horn of
                            Asterius</a>
                    </td>
                    <td align="center"><a href="Asterius.html" title="Asterius">Asterius</a>
                    </td>
                    <td align="center">49
                    </td>
                    <td align="center">149 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Magic_Bead.html" title="Magic Bead">Magic Bead</a>
                    </td>
                    <td align="center"><a href="Dantalian.html" title="Dantalian">Dantalian</a>
                    </td>
                    <td align="center">52
                    </td>
                    <td align="center">149 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Strange_Ivory.html" title="Strange Ivory">Strange Ivory</a>
                    </td>
                    <td align="center"><a href="Gannessa.html" title="Gannessa">Gannessa</a>
                    </td>
                    <td align="center">55
                    </td>
                    <td align="center">149 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Metal_Heart.html" title="Metal Heart">Metal Heart</a>
                    </td>
                    <td align="center"><a href="Asuras.html" title="Asuras">Asuras</a>
                    </td>
                    <td align="center">58
                    </td>
                    <td align="center">149 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Blue_Honey.html" title="Blue Honey">Blue Honey</a>
                    </td>
                    <td align="center"><a href="Wagsaac.html" title="Wagsaac">Wagsaac</a>
                    </td>
                    <td align="center">11
                    </td>
                    <td align="center">25 ~ 50
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Flybat.html" title="Flybat">Flybat</a>
                    </td>
                    <td align="center"><a href="Flybat.html" title="Flybat">Flybat</a>
                    </td>
                    <td align="center">11
                    </td>
                    <td align="center">34 ~ 50
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Mia_Doll.html" title="Mia Doll">Mia Doll</a>
                    </td>
                    <td align="center"><a href="Mia.html" title="Mia">Mia</a>
                    </td>
                    <td align="center">12
                    </td>
                    <td align="center">26 ~ 50
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Furious_Match.html" title="Furious Match">Furious Match</a>
                    </td>
                    <td align="center"><a href="Mr_Pumpkin.html" title="Mr Pumpkin">Mr. Pumpkin</a>
                    </td>
                    <td align="center">13
                    </td>
                    <td align="center">26 ~ 50
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Cardrin.html" title="Cardrin">Cardrin</a>
                    </td>
                    <td align="center"><a href="Red_Mantis.html" title="Red Mantis">Red Mantis</a>
                    </td>
                    <td align="center">14
                    </td>
                    <td align="center">25 ~ 49
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Hammarble.html" title="Hammarble">Hammarble</a>
                    </td>
                    <td align="center"><a href="Jack_The_Hammer.html" title="Jack The Hammer">Jack The Hammer</a>
                    </td>
                    <td align="center">15
                    </td>
                    <td align="center">36 ~ 71
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Gigglande.html" title="Gigglande">Gigglande</a>
                    </td>
                    <td align="center"><a href="Giggle_Box.html" title="Giggle Box">Giggle Box</a>
                    </td>
                    <td align="center">16
                    </td>
                    <td align="center">36 ~ 71
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Crescent_Stone.html" title="Crescent Stone">Crescent Stone</a>
                    </td>
                    <td align="center"><a href="Rock_Muscle.html" title="Rock Muscle">Rock Muscle</a>
                    </td>
                    <td align="center">17
                    </td>
                    <td align="center">38 ~ 71
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Bucring.html" title="Bucring">Bucring</a>
                    </td>
                    <td align="center"><a href="Bucrow.html" title="Bucrow">Bucrow</a>
                    </td>
                    <td align="center">17
                    </td>
                    <td align="center">43 ~ 49
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Boband.html" title="Boband">Boband</a>
                    </td>
                    <td align="center"><a href="Hobo.html" title="Hobo">Hobo</a>
                    </td>
                    <td align="center">18
                    </td>
                    <td align="center">40 ~ 71
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Dumbling.html" title="Dumbling">Dumbling</a>
                    </td>
                    <td align="center"><a href="Dumb_Bull.html" title="Dumb Bull">Dumb Bull</a>
                    </td>
                    <td align="center">19
                    </td>
                    <td align="center">52 ~ 102
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Kalin.html" title="Kalin">Kalin</a>
                    </td>
                    <td align="center"><a href="Totemia.html" title="Totemia">Totemia</a>
                    </td>
                    <td align="center">20
                    </td>
                    <td align="center">51 ~ 102
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Clock_Heart.html" title="Clock Heart">Clock Heart</a>
                    </td>
                    <td align="center"><a href="Cardpuppet.html" title="Cardpuppet">Cardpuppet</a>
                    </td>
                    <td align="center">21
                    </td>
                    <td align="center">52 ~ 101
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Tomb_Marble.html" title="Tomb Marble">Tomb Marble</a>
                    </td>
                    <td align="center"><a href="Tombstone_Bearer.html" title="Tombstone Bearer">Tombstone Bearer</a>
                    </td>
                    <td align="center">22
                    </td>
                    <td align="center">54 ~ 102
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Scoptooth.html" title="Scoptooth">Scoptooth</a>
                    </td>
                    <td align="center"><a href="Scorpicon.html" title="Scorpicon">Scorpicon</a>
                    </td>
                    <td align="center">22
                    </td>
                    <td align="center">56 ~ 102
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Golden_Fist" title="Golden Fist">Golden Fist</a>
                    </td>
                    <td align="center"><a href="Basque.html" title="Basque">Basque</a>
                    </td>
                    <td align="center">23
                    </td>
                    <td align="center">75 ~ 145
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Orbrin.html" title="Orbrin">Orbrin</a>
                    </td>
                    <td align="center"><a href="Prankster.html" title="Prankster">Prankster</a>
                    </td>
                    <td align="center">24
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Golden_Cup.html" title="Golden Cup">Golden Cup</a>
                    </td>
                    <td align="center"><a href="Wheelem.html" title="Wheelem">Wheelem</a>
                    </td>
                    <td align="center">25
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Toma.html" title="Toma">Toma</a>
                    </td>
                    <td align="center"><a href="Leyena.html" title="Leyena">Leyena</a>
                    </td>
                    <td align="center">26
                    </td>
                    <td align="center">72 ~ 145
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Trangoggle.html" title="Trangoggle">Trangoggle</a>
                    </td>
                    <td align="center"><a href="Trangfoma.html" title="Trangfoma">Trangfoma</a>
                    </td>
                    <td align="center">26
                    </td>
                    <td align="center">73 ~ 145
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Steam_Tear.html" title="Steam Tear">Steam Tear</a>
                    </td>
                    <td align="center"><a href="Steamwalker.html" title="Steamwalker">Steamwalker</a>
                    </td>
                    <td align="center">27
                    </td>
                    <td align="center">74 ~ 143
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Knightler.html" title="Knightler">Knightler</a>
                    </td>
                    <td align="center"><a href="Steel_Knight.html" title="Steel Knight">Steel Knight</a>
                    </td>
                    <td align="center">28
                    </td>
                    <td align="center">73 ~ 146
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Wheeshoe.html" title="Wheeshoe">Wheeshoe</a>
                    </td>
                    <td align="center"><a href="Nutty_Wheel.html" title="Nutty Wheel">Nutty Wheel</a>
                    </td>
                    <td align="center">29
                    </td>
                    <td align="center">106 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Droil.html" title="Droil">Droil</a>
                    </td>
                    <td align="center"><a href="Driller.html" title="Driller">Driller</a>
                    </td>
                    <td align="center">30
                    </td>
                    <td align="center">104 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Ampere.html" title="Ampere">Ampere</a>
                    </td>
                    <td align="center"><a href="Volt.html" title="Volt">Volt</a>
                    </td>
                    <td align="center">31
                    </td>
                    <td align="center">105 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Guardieye.html" title="Guardieye">Guardieye</a>
                    </td>
                    <td align="center"><a href="Elderguard.html" title="Elderguard">Elderguard</a>
                    </td>
                    <td align="center">32
                    </td>
                    <td align="center">104 ~ 206
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Garbageton.html" title="Garbageton">Garbageton</a>
                    </td>
                    <td align="center"><a href="Garbagepider.html" title="Garbagepider">Garbagepider</a>
                    </td>
                    <td align="center">33
                    </td>
                    <td align="center">105 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Eronior.html" title="Eronior">Eronior</a>
                    </td>
                    <td align="center"><a href="Crane_Machinery.html" title="Crane Machinery">Crane Machinery</a>
                    </td>
                    <td align="center">34
                    </td>
                    <td align="center">104 ~ 207
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Zombyhoe.html" title="Zombyhoe">Zombyhoe</a>
                    </td>
                    <td align="center"><a href="Zombiger.html" title="Zombiger">Zombiger</a>
                    </td>
                    <td align="center">28
                    </td>
                    <td align="center">105 ~ 205
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Nuctu-Wheel.html" title="Nuctu-Wheel">Nuctu-Wheel</a>
                    </td>
                    <td align="center"><a href="Nuctuvehicle.html" title="Nuctuvehicle">Nuctuvehicle</a>
                    </td>
                    <td align="center">29
                    </td>
                    <td align="center">118 ~ 187
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Zem_Mark.html" title="Zem Mark">Zem Mark</a>
                    </td>
                    <td align="center"><a href="Risem.html" title="Risem">Risem</a>
                    </td>
                    <td align="center">30
                    </td>
                    <td align="center">129 ~ 201
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Sycale.html" title="Sycale">Sycale</a>
                    </td>
                    <td align="center"><a href="Syliaca.html" title="Syliaca">Syliaca</a>
                    </td>
                    <td align="center">35
                    </td>
                    <td align="center">104 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Mong_Tear.html" title="Mong Tear">Mong Tear</a>
                    </td>
                    <td align="center"><a href="Greemong.html" title="Greemong">Greemong</a>
                    </td>
                    <td align="center">36
                    </td>
                    <td align="center">149 ~ 294
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Bomb_Timer.html" title="Bomb Timer">Bomb Timer</a>
                    </td>
                    <td align="center"><a href="Carrierbomb.html" title="Carrierbomb">Carrierbomb</a>
                    </td>
                    <td align="center">37
                    </td>
                    <td align="center">149 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Repygle.html" title="Repygle">Repygle</a>
                    </td>
                    <td align="center"><a href="Nautrepy.html" title="Nautrepy">Nautrepy</a>
                    </td>
                    <td align="center">34
                    </td>
                    <td align="center">151 ~ 297
                    </td>
                </tr>

                <tr class="text-center">
                    <td><a href="Boopoison.html" title="Boopoison">Boopoison</a>
                    </td>
                    <td align="center"><a href="Boo.html" title="Boo">Boo</a>
                    </td>
                    <td align="center">36
                    </td>
                    <td align="center">213 ~ 425
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Prewing.html" title="Prewing">Prewing</a>
                    </td>
                    <td align="center"><a href="Hoppre.html" title="Hoppre">Hoppre</a>
                    </td>
                    <td align="center">38
                    </td>
                    <td align="center">238 ~ 418
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Poiespore.html" title="Poiespore">Poiespore</a>
                    </td>
                    <td align="center"><a href="Mushpoie.html" title="Mushpoie">Mushpoie</a>
                    </td>
                    <td align="center">39
                    </td>
                    <td align="center">217 ~ 425
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Renyken.html" title="Renyken">Renyken</a>
                    </td>
                    <td align="center"><a href="Iren.html" title="Iren">Iren</a>
                    </td>
                    <td align="center">41
                    </td>
                    <td align="center">214 ~ 410
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Tangkask.html" title="Tangkask">Tangkask</a>
                    </td>
                    <td align="center"><a href="Watangka.html" title="Watangka">Watangka</a>
                    </td>
                    <td align="center">42
                    </td>
                    <td align="center">246 ~ 396
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Rootioe.html" title="Rootioe">Rootioe</a>
                    </td>
                    <td align="center"><a href="Antiquery.html" title="Antiquery">Antiquery</a>
                    </td>
                    <td align="center">44
                    </td>
                    <td align="center">218 ~ 394
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Grrr_Bandage.html" title="Grrr Bandage">Grrr Bandage</a>
                    </td>
                    <td align="center"><a href="Grrr.html" title="Grrr">Grrr</a>
                    </td>
                    <td align="center">30
                    </td>
                    <td align="center">150 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Luchest.html" title="Luchest">Luchest</a>
                    </td>
                    <td align="center"><a href="Luia.html" title="Luia">Luia</a>
                    </td>
                    <td align="center">45
                    </td>
                    <td align="center">215 ~ 366
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Dumptire.html" title="Dumptire">Dumptire</a>
                    </td>
                    <td align="center"><a href="Dump.html" title="Dump">Dump</a>
                    </td>
                    <td align="center">32
                    </td>
                    <td align="center">149 ~ 297
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Eronsimint.html" title="Eronsimint">Eronsimint</a>
                    </td>
                    <td align="center"><a href="Gongury.html" title="Gongury">Gongury</a>
                    </td>
                    <td align="center">47
                    </td>
                    <td align="center">107 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Hammamer.html" title="Hammamer">Hammamer</a>
                    </td>
                    <td align="center"><a href="Shuhamma.html" title="Shuhamma">Shuhamma</a>
                    </td>
                    <td align="center">48
                    </td>
                    <td align="center">104 ~ 200
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Rnamond.html" title="Rnamond">Rnamond</a>
                    </td>
                    <td align="center"><a href="Kern.html" title="Kern">Kern</a>
                    </td>
                    <td align="center">50
                    </td>
                    <td align="center">115 ~ 208
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Phanbubble.html" title="Phanbubble">Phanbubble</a>
                    </td>
                    <td align="center"><a href="Glaphan.html" title="Glaphan">Glaphan</a>
                    </td>
                    <td align="center">51
                    </td>
                    <td align="center">153 ~ 299
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Merahook.html" title="Merahook">Merahook</a>
                    </td>
                    <td align="center"><a href="Chimeradon.html" title="Chimeradon">Chimeradon</a>
                    </td>
                    <td align="center">53
                    </td>
                    <td align="center">154 ~ 294
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Nerkymane.html" title="Nerkymane">Nerkymane</a>
                    </td>
                    <td align="center"><a href="Bearnerky.html" title="Bearnerky">Bearnerky</a>
                    </td>
                    <td align="center">54
                    </td>
                    <td align="center">153 ~ 291
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Rincruet.html" title="Rincruet">Rincruet</a>
                    </td>
                    <td align="center"><a href="Chef_Muffrin.html" title="Chef Muffrin">Chef Muffrin</a>
                    </td>
                    <td align="center">56
                    </td>
                    <td align="center">178 ~ 275
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a
                            href="Popshift.html" title="Popshift">Popshift</a>
                    </td>
                    <td align="center"><a href="Popcrank.html" title="Popcrank">Popcrank</a>
                    </td>
                    <td align="center">57
                    </td>
                    <td align="center">235 ~ 409
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Dragon_Heart.html" title="Dragon Heart">Dragon Heart</a>
                    </td>
                    <td align="center"><a href="Meteonyker.html" title="Meteonyker">Meteonyker</a>
                    </td>
                    <td align="center">60
                    </td>
                    <td align="center">274 ~ 468
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Dragon_Tooth.html" title="Dragon Tooth">Dragon Tooth</a>
                    </td>
                    <td align="center"><a href="Meteonyker.html" title="Meteonyker">Meteonyker</a>
                    </td>
                    <td align="center">60
                    </td>
                    <td align="center">261 ~ 483
                    </td>
                </tr>
                <tr class="text-center">
                    <td><a href="Mysterious_Eyeball.html" title="Mysterious Eyeball">Mysterious
                            Eyeball</a>
                    </td>
                    <td align="center"><a href="Cyclops_X.html" title="Cyclops X">Cyclops X</a>
                    </td>
                    <td align="center">60
                    </td>
                    <td align="center">262 ~ 489
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


@stop
