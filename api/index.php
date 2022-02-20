<?php
/*
*
* Copyright (c) 2022 Melvin Jones Repol (mrepol742.github.io). All rights reserved.
*
* License under the GNU General Public License, Version 3.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*     https://github.com/mrepol742/Webvium-Server/LICENSE
*
* Unless required by the applicable law or agreed in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/

$gif = array("https://tenor.com/view/detective-detective-conan-anime-eyeglasses-gif-16507322",
    "https://tenor.com/view/detective-conan-edogawa-conan-a-detective-anime-windy-gif-16899714", 
    "https://tenor.com/view/detective-conan-shinichi-kudo-its-elementary-tsk-tsk-tsk-wink-gif-16899593",
    "https://tenor.com/view/detective-conan-shinichi-kudo-conan-edogawa-aptx-transformation-gif-22476040",
    "https://tenor.com/view/detective-conan-conan-edogawa-smirk-cocky-smug-gif-22313617",
    "https://tenor.com/view/detective-conan-shinichi-kudo-shinichi-anime-upset-shinichi-upset-gif-16899096",
    "https://tenor.com/view/detective-conan-edogawa-conan-anime-blush-gif-16899802",
    "https://tenor.com/view/detective-conan-shinichi-kudo-smile-cute-kawaii-gif-18664638",
    "https://tenor.com/view/detective-conan-conan-edogawa-gremlin-smile-mischevious-gif-19597821",
    "https://tenor.com/view/detective-conan-glasses-gif-23905397");

echo $gif[mt_rand(1, count($gif))];
?>