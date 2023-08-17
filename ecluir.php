CodeIgniter\HTTP\Exceptions\HTTPException Object
(
    [message:protected] => 22 : The requested URL returned error: 401
    [string:Exception:private] => 
    [code:protected] => 0
    [file:protected] => C:\laragon\www\clima\vendor\codeigniter4\framework\system\HTTP\CURLRequest.php
    [line:protected] => 679
    [trace:Exception:private] => Array
        (
            [0] => Array
                (
                    [file] => C:\laragon\www\clima\vendor\codeigniter4\framework\system\HTTP\CURLRequest.php
                    [line] => 679
                    [function] => forCurlError
                    [class] => CodeIgniter\HTTP\Exceptions\HTTPException
                    [type] => ::
                    [args] => Array
                        (
                            [0] => 22
                            [1] => The requested URL returned error: 401
                        )

                )

            [1] => Array
                (
                    [file] => C:\laragon\www\clima\vendor\codeigniter4\framework\system\HTTP\CURLRequest.php
                    [line] => 381
                    [function] => sendRequest
                    [class] => CodeIgniter\HTTP\CURLRequest
                    [type] => ->
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [10002] => https://api.openweathermap.org/data/2.5/onecall?lat=-15.278740&lon=-55.625300&units=metric&lang=pt_br&appid=df6baf961c09a5534c36cc24c9b9a973
                                    [19913] => 1
                                    [42] => 1
                                    [74] => 1
                                    [-1] => 1
                                    [64] => 1
                                    [155] => 0
                                    [156] => 150000
                                    [45] => 1
                                    [10036] => GET
                                )

                        )

                )

            [2] => Array
                (
                    [file] => C:\laragon\www\clima\vendor\codeigniter4\framework\system\HTTP\CURLRequest.php
                    [line] => 143
                    [function] => send
                    [class] => CodeIgniter\HTTP\CURLRequest
                    [type] => ->
                    [args] => Array
                        (
                            [0] => GET
                            [1] => https://api.openweathermap.org/data/2.5/onecall?lat=-15.278740&lon=-55.625300&units=metric&lang=pt_br&appid=df6baf961c09a5534c36cc24c9b9a973
                        )

                )

            [3] => Array
                (
                    [file] => C:\laragon\www\clima\app\Libraries\Weather.php
                    [line] => 57
                    [function] => request
                    [class] => CodeIgniter\HTTP\CURLRequest
                    [type] => ->
                    [args] => Array
                        (
                            [0] => GET
                            [1] => https://api.openweathermap.org/data/2.5/onecall?lat=-15.278740&lon=-55.625300&units=metric&lang=pt_br&appid=df6baf961c09a5534c36cc24c9b9a973
                        )

                )

            [4] => Array
                (
                    [file] => C:\laragon\www\clima\app\Controllers\Home.php
                    [line] => 39
                    [function] => get
                    [class] => App\Libraries\weather
                    [type] => ->
                    [args] => Array
                        (
                            [0] => -15.278740
                            [1] => -55.625300
                        )

                )

            [5] => Array
                (
                    [file] => C:\laragon\www\clima\vendor\codeigniter4\framework\system\CodeIgniter.php
                    [line] => 932
                    [function] => weather
                    [class] => App\Controllers\Home
                    [type] => ->
                    [args] => Array
                        (
                        )

                )

            [6] => Array
                (
                    [file] => C:\laragon\www\clima\vendor\codeigniter4\framework\system\CodeIgniter.php
                    [line] => 497
                    [function] => runController
                    [class] => CodeIgniter\CodeIgniter
                    [type] => ->
                    [args] => Array
                        (
                            [0] => App\Controllers\Home Object
                                (
                                    [helpers:protected] => Array
                                        (
                                        )

                                    [request:protected] => CodeIgniter\HTTP\IncomingRequest Object
                                        (
                                            [protocolVersion:protected] => 1.1
                                            [validProtocolVersions:protected] => Array
                                                (
                                                    [0] => 1.0
                                                    [1] => 1.1
                                                    [2] => 2.0
                                                    [3] => 3.0
                                                )

                                            [body:protected] => 
                                            [headers:protected] => Array
                                                (
                                                    [Host] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Host
                                                            [value:protected] => clima.test
                                                        )

                                                    [Connection] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Connection
                                                            [value:protected] => keep-alive
                                                        )

                                                    [Cache-Control] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Cache-Control
                                                            [value:protected] => max-age=0
                                                        )

                                                    [Upgrade-Insecure-Requests] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Upgrade-Insecure-Requests
                                                            [value:protected] => 1
                                                        )

                                                    [User-Agent] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => User-Agent
                                                            [value:protected] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36
                                                        )

                                                    [Accept] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Accept
                                                            [value:protected] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
                                                        )

                                                    [Accept-Encoding] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Accept-Encoding
                                                            [value:protected] => gzip, deflate
                                                        )

                                                    [Accept-Language] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Accept-Language
                                                            [value:protected] => pt-BR,pt;q=0.9
                                                        )

                                                    [Cookie] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Cookie
                                                            [value:protected] => ci_session=sg3cdo39u5qp17701rk1osbpb4sbr9r4
                                                        )

                                                )

                                            [headerMap:protected] => Array
                                                (
                                                    [host] => Host
                                                    [connection] => Connection
                                                    [cache-control] => Cache-Control
                                                    [upgrade-insecure-requests] => Upgrade-Insecure-Requests
                                                    [user-agent] => User-Agent
                                                    [accept] => Accept
                                                    [accept-encoding] => Accept-Encoding
                                                    [accept-language] => Accept-Language
                                                    [cookie] => Cookie
                                                )

                                            [method:protected] => GET
                                            [uri] => CodeIgniter\HTTP\URI Object
                                                (
                                                    [uriString:protected] => 
                                                    [baseURL:CodeIgniter\HTTP\URI:private] => http://clima.test/
                                                    [segments:protected] => Array
                                                        (
                                                            [0] => weather
                                                        )

                                                    [scheme:protected] => http
                                                    [user:protected] => 
                                                    [password:protected] => 
                                                    [host:protected] => clima.test
                                                    [port:protected] => 
                                                    [path:protected] => weather
                                                    [fragment:protected] => 
                                                    [query:protected] => Array
                                                        (
                                                        )

                                                    [defaultPorts:protected] => Array
                                                        (
                                                            [http] => 80
                                                            [https] => 443
                                                            [ftp] => 21
                                                            [sftp] => 22
                                                        )

                                                    [showPassword:protected] => 
                                                    [silent:protected] => 
                                                    [rawQueryString:protected] => 
                                                )

                                            [proxyIPs:protected] => Array
                                                (
                                                )

                                            [ipAddress:protected] => 
                                            [globals:protected] => Array
                                                (
                                                    [server] => Array
                                                        (
                                                            [REDIRECT_STATUS] => 200
                                                            [HTTP_HOST] => clima.test
                                                            [HTTP_CONNECTION] => keep-alive
                                                            [HTTP_CACHE_CONTROL] => max-age=0
                                                            [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
                                                            [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36
                                                            [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
                                                            [HTTP_ACCEPT_ENCODING] => gzip, deflate
                                                            [HTTP_ACCEPT_LANGUAGE] => pt-BR,pt;q=0.9
                                                            [HTTP_COOKIE] => ci_session=sg3cdo39u5qp17701rk1osbpb4sbr9r4
                                                            [PATH] => C:\Program Files\Common Files\Oracle\Java\javapath;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files (x86)\Microsoft SQL Server\160\Tools\Binn\;C:\Program Files\Microsoft SQL Server\160\Tools\Binn\;C:\Program Files\Microsoft SQL Server\Client SDK\ODBC\170\Tools\Binn\;C:\Program Files\Microsoft SQL Server\160\DTS\Binn\;C:\PROGRA~2\PICC;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Program Files\Git\cmd;C:\Users\tyenr\AppData\Local\Programs\Python\Python310\Scripts\;C:\Users\tyenr\AppData\Local\Programs\Python\Python310\;C:\Users\tyenr\AppData\Local\Microsoft\WindowsApps;;C:\Users\tyenr\.dotnet\tools;C:\Program Files\JetBrains\PyCharm Community Edition 2022.3.2\bin;;C:\Users\tyenr\AppData\Roaming\Composer\vendor\bin;C:\Users\tyenr\AppData\Local\Programs\Microsoft VS Code\bin
                                                            [SystemRoot] => C:\Windows
                                                            [COMSPEC] => C:\Windows\system32\cmd.exe
                                                            [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
                                                            [WINDIR] => C:\Windows
                                                            [SERVER_SIGNATURE] => 
                                                            [SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1q PHP/8.1.10
                                                            [SERVER_NAME] => clima.test
                                                            [SERVER_ADDR] => 127.0.0.1
                                                            [SERVER_PORT] => 80
                                                            [REMOTE_ADDR] => 127.0.0.1
                                                            [DOCUMENT_ROOT] => C:/laragon/www/clima/public
                                                            [REQUEST_SCHEME] => http
                                                            [CONTEXT_PREFIX] => 
                                                            [CONTEXT_DOCUMENT_ROOT] => C:/laragon/www/clima/public
                                                            [SERVER_ADMIN] => admin@example.com
                                                            [SCRIPT_FILENAME] => C:/laragon/www/clima/public/index.php
                                                            [REMOTE_PORT] => 56280
                                                            [REDIRECT_URL] => /weather
                                                            [GATEWAY_INTERFACE] => CGI/1.1
                                                            [SERVER_PROTOCOL] => HTTP/1.1
                                                            [REQUEST_METHOD] => GET
                                                            [QUERY_STRING] => 
                                                            [REQUEST_URI] => /weather
                                                            [SCRIPT_NAME] => /index.php
                                                            [PATH_INFO] => /weather
                                                            [PATH_TRANSLATED] => redirect:\index.php\weather
                                                            [PHP_SELF] => /index.php/weather
                                                            [REQUEST_TIME_FLOAT] => 1691876026.1285
                                                            [REQUEST_TIME] => 1691876026
                                                            [CI_ENVIRONMENT] => development
                                                            [app.baseURL] => http://clima.test/
                                                            [app.indexPage] => 
                                                            [WEATHER_API_KEY] => df6baf961c09a5534c36cc24c9b9a973
                                                        )

                                                    [get] => Array
                                                        (
                                                        )

                                                )

                                            [enableCSRF:protected] => 
                                            [path:protected] => weather
                                            [files:protected] => 
                                            [negotiator:protected] => 
                                            [defaultLocale:protected] => en
                                            [locale:protected] => en
                                            [validLocales:protected] => Array
                                                (
                                                    [0] => en
                                                )

                                            [config] => Config\App Object
                                                (
                                                    [baseURL] => http://clima.test/
                                                    [allowedHostnames] => Array
                                                        (
                                                        )

                                                    [indexPage] => 
                                                    [uriProtocol] => REQUEST_URI
                                                    [defaultLocale] => en
                                                    [negotiateLocale] => 
                                                    [supportedLocales] => Array
                                                        (
                                                            [0] => en
                                                        )

                                                    [appTimezone] => UTC
                                                    [charset] => UTF-8
                                                    [forceGlobalSecureRequests] => 
                                                    [sessionDriver] => CodeIgniter\Session\Handlers\FileHandler
                                                    [sessionCookieName] => ci_session
                                                    [sessionExpiration] => 7200
                                                    [sessionSavePath] => C:\laragon\www\clima\writable\session
                                                    [sessionMatchIP] => 
                                                    [sessionTimeToUpdate] => 300
                                                    [sessionRegenerateDestroy] => 
                                                    [sessionDBGroup] => 
                                                    [cookiePrefix] => 
                                                    [cookieDomain] => 
                                                    [cookiePath] => /
                                                    [cookieSecure] => 
                                                    [cookieHTTPOnly] => 1
                                                    [cookieSameSite] => Lax
                                                    [proxyIPs] => Array
                                                        (
                                                        )

                                                    [CSRFTokenName] => csrf_test_name
                                                    [CSRFHeaderName] => X-CSRF-TOKEN
                                                    [CSRFCookieName] => csrf_cookie_name
                                                    [CSRFExpire] => 7200
                                                    [CSRFRegenerate] => 1
                                                    [CSRFRedirect] => 
                                                    [CSRFSameSite] => Lax
                                                    [CSPEnabled] => 
                                                )

                                            [oldInput:protected] => Array
                                                (
                                                )

                                            [userAgent:protected] => CodeIgniter\HTTP\UserAgent Object
                                                (
                                                    [agent:protected] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36
                                                    [isBrowser:protected] => 1
                                                    [isRobot:protected] => 
                                                    [isMobile:protected] => 
                                                    [config:protected] => Config\UserAgents Object
                                                        (
                                                            [platforms] => Array
                                                                (
                                                                    [windows nt 10.0] => Windows 10
                                                                    [windows nt 6.3] => Windows 8.1
                                                                    [windows nt 6.2] => Windows 8
                                                                    [windows nt 6.1] => Windows 7
                                                                    [windows nt 6.0] => Windows Vista
                                                                    [windows nt 5.2] => Windows 2003
                                                                    [windows nt 5.1] => Windows XP
                                                                    [windows nt 5.0] => Windows 2000
                                                                    [windows nt 4.0] => Windows NT 4.0
                                                                    [winnt4.0] => Windows NT 4.0
                                                                    [winnt 4.0] => Windows NT
                                                                    [winnt] => Windows NT
                                                                    [windows 98] => Windows 98
                                                                    [win98] => Windows 98
                                                                    [windows 95] => Windows 95
                                                                    [win95] => Windows 95
                                                                    [windows phone] => Windows Phone
                                                                    [windows] => Unknown Windows OS
                                                                    [android] => Android
                                                                    [blackberry] => BlackBerry
                                                                    [iphone] => iOS
                                                                    [ipad] => iOS
                                                                    [ipod] => iOS
                                                                    [os x] => Mac OS X
                                                                    [ppc mac] => Power PC Mac
                                                                    [freebsd] => FreeBSD
                                                                    [ppc] => Macintosh
                                                                    [linux] => Linux
                                                                    [debian] => Debian
                                                                    [sunos] => Sun Solaris
                                                                    [beos] => BeOS
                                                                    [apachebench] => ApacheBench
                                                                    [aix] => AIX
                                                                    [irix] => Irix
                                                                    [osf] => DEC OSF
                                                                    [hp-ux] => HP-UX
                                                                    [netbsd] => NetBSD
                                                                    [bsdi] => BSDi
                                                                    [openbsd] => OpenBSD
                                                                    [gnu] => GNU/Linux
                                                                    [unix] => Unknown Unix OS
                                                                    [symbian] => Symbian OS
                                                                )

                                                            [browsers] => Array
                                                                (
                                                                    [OPR] => Opera
                                                                    [Flock] => Flock
                                                                    [Edge] => Spartan
                                                                    [Edg] => Edge
                                                                    [Chrome] => Chrome
                                                                    [Opera.*?Version] => Opera
                                                                    [Opera] => Opera
                                                                    [MSIE] => Internet Explorer
                                                                    [Internet Explorer] => Internet Explorer
                                                                    [Trident.* rv] => Internet Explorer
                                                                    [Shiira] => Shiira
                                                                    [Firefox] => Firefox
                                                                    [Chimera] => Chimera
                                                                    [Phoenix] => Phoenix
                                                                    [Firebird] => Firebird
                                                                    [Camino] => Camino
                                                                    [Netscape] => Netscape
                                                                    [OmniWeb] => OmniWeb
                                                                    [Safari] => Safari
                                                                    [Mozilla] => Mozilla
                                                                    [Konqueror] => Konqueror
                                                                    [icab] => iCab
                                                                    [Lynx] => Lynx
                                                                    [Links] => Links
                                                                    [hotjava] => HotJava
                                                                    [amaya] => Amaya
                                                                    [IBrowse] => IBrowse
                                                                    [Maxthon] => Maxthon
                                                                    [Ubuntu] => Ubuntu Web Browser
                                                                    [Vivaldi] => Vivaldi
                                                                )

                                                            [mobiles] => Array
                                                                (
                                                                    [mobileexplorer] => Mobile Explorer
                                                                    [palmsource] => Palm
                                                                    [palmscape] => Palmscape
                                                                    [motorola] => Motorola
                                                                    [nokia] => Nokia
                                                                    [palm] => Palm
                                                                    [iphone] => Apple iPhone
                                                                    [ipad] => iPad
                                                                    [ipod] => Apple iPod Touch
                                                                    [sony] => Sony Ericsson
                                                                    [ericsson] => Sony Ericsson
                                                                    [blackberry] => BlackBerry
                                                                    [cocoon] => O2 Cocoon
                                                                    [blazer] => Treo
                                                                    [lg] => LG
                                                                    [amoi] => Amoi
                                                                    [xda] => XDA
                                                                    [mda] => MDA
                                                                    [vario] => Vario
                                                                    [htc] => HTC
                                                                    [samsung] => Samsung
                                                                    [sharp] => Sharp
                                                                    [sie-] => Siemens
                                                                    [alcatel] => Alcatel
                                                                    [benq] => BenQ
                                                                    [ipaq] => HP iPaq
                                                                    [mot-] => Motorola
                                                                    [playstation portable] => PlayStation Portable
                                                                    [playstation 3] => PlayStation 3
                                                                    [playstation vita] => PlayStation Vita
                                                                    [hiptop] => Danger Hiptop
                                                                    [nec-] => NEC
                                                                    [panasonic] => Panasonic
                                                                    [philips] => Philips
                                                                    [sagem] => Sagem
                                                                    [sanyo] => Sanyo
                                                                    [spv] => SPV
                                                                    [zte] => ZTE
                                                                    [sendo] => Sendo
                                                                    [nintendo dsi] => Nintendo DSi
                                                                    [nintendo ds] => Nintendo DS
                                                                    [nintendo 3ds] => Nintendo 3DS
                                                                    [wii] => Nintendo Wii
                                                                    [open web] => Open Web
                                                                    [openweb] => OpenWeb
                                                                    [android] => Android
                                                                    [symbian] => Symbian
                                                                    [SymbianOS] => SymbianOS
                                                                    [elaine] => Palm
                                                                    [series60] => Symbian S60
                                                                    [windows ce] => Windows CE
                                                                    [obigo] => Obigo
                                                                    [netfront] => Netfront Browser
                                                                    [openwave] => Openwave Browser
                                                                    [mobilexplorer] => Mobile Explorer
                                                                    [operamini] => Opera Mini
                                                                    [opera mini] => Opera Mini
                                                                    [opera mobi] => Opera Mobile
                                                                    [fennec] => Firefox Mobile
                                                                    [digital paths] => Digital Paths
                                                                    [avantgo] => AvantGo
                                                                    [xiino] => Xiino
                                                                    [novarra] => Novarra Transcoder
                                                                    [vodafone] => Vodafone
                                                                    [docomo] => NTT DoCoMo
                                                                    [o2] => O2
                                                                    [mobile] => Generic Mobile
                                                                    [wireless] => Generic Mobile
                                                                    [j2me] => Generic Mobile
                                                                    [midp] => Generic Mobile
                                                                    [cldc] => Generic Mobile
                                                                    [up.link] => Generic Mobile
                                                                    [up.browser] => Generic Mobile
                                                                    [smartphone] => Generic Mobile
                                                                    [cellphone] => Generic Mobile
                                                                )

                                                            [robots] => Array
                                                                (
                                                                    [googlebot] => Googlebot
                                                                    [msnbot] => MSNBot
                                                                    [baiduspider] => Baiduspider
                                                                    [bingbot] => Bing
                                                                    [slurp] => Inktomi Slurp
                                                                    [yahoo] => Yahoo
                                                                    [ask jeeves] => Ask Jeeves
                                                                    [fastcrawler] => FastCrawler
                                                                    [infoseek] => InfoSeek Robot 1.0
                                                                    [lycos] => Lycos
                                                                    [yandex] => YandexBot
                                                                    [mediapartners-google] => MediaPartners Google
                                                                    [CRAZYWEBCRAWLER] => Crazy Webcrawler
                                                                    [adsbot-google] => AdsBot Google
                                                                    [feedfetcher-google] => Feedfetcher Google
                                                                    [curious george] => Curious George
                                                                    [ia_archiver] => Alexa Crawler
                                                                    [MJ12bot] => Majestic-12
                                                                    [Uptimebot] => Uptimebot
                                                                )

                                                        )

                                                    [platform:protected] => Windows 10
                                                    [browser:protected] => Chrome
                                                    [version:protected] => 115.0.0.0
                                                    [mobile:protected] => 
                                                    [robot:protected] => 
                                                    [referrer:protected] => 
                                                )

                                        )

                                    [response:protected] => CodeIgniter\HTTP\Response Object
                                        (
                                            [protocolVersion:protected] => 1.1
                                            [validProtocolVersions:protected] => Array
                                                (
                                                    [0] => 1.0
                                                    [1] => 1.1
                                                    [2] => 2.0
                                                    [3] => 3.0
                                                )

                                            [body:protected] => 
                                            [headers:protected] => Array
                                                (
                                                    [Cache-Control] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Cache-Control
                                                            [value:protected] => Array
                                                                (
                                                                    [0] => no-store
                                                                    [1] => max-age=0
                                                                    [2] => no-cache
                                                                )

                                                        )

                                                    [Content-Type] => CodeIgniter\HTTP\Header Object
                                                        (
                                                            [name:protected] => Content-Type
                                                            [value:protected] => text/html; charset=UTF-8
                                                        )

                                                )

                                            [headerMap:protected] => Array
                                                (
                                                    [cache-control] => Cache-Control
                                                    [content-type] => Content-Type
                                                )

                                            [reason:protected] => OK
                                            [statusCode:protected] => 200
                                            [pretend:protected] => 
                                            [CSPEnabled:protected] => 
                                            [CSP] => CodeIgniter\HTTP\ContentSecurityPolicy Object
                                                (
                                                    [baseURI:protected] => 
                                                    [childSrc:protected] => self
                                                    [connectSrc:protected] => self
                                                    [defaultSrc:protected] => 
                                                    [fontSrc:protected] => 
                                                    [formAction:protected] => self
                                                    [frameAncestors:protected] => 
                                                    [frameSrc:protected] => 
                                                    [imageSrc:protected] => self
                                                    [mediaSrc:protected] => 
                                                    [objectSrc:protected] => self
                                                    [pluginTypes:protected] => 
                                                    [reportURI:protected] => 
                                                    [sandbox:protected] => 
                                                    [scriptSrc:protected] => Array
                                                        (
                                                            [0] => self
                                                        )

                                                    [styleSrc:protected] => Array
                                                        (
                                                            [0] => self
                                                        )

                                                    [manifestSrc:protected] => 
                                                    [upgradeInsecureRequests:protected] => 
                                                    [reportOnly:protected] => 
                                                    [validSources:protected] => Array
                                                        (
                                                            [0] => self
                                                            [1] => none
                                                            [2] => unsafe-inline
                                                            [3] => unsafe-eval
                                                        )

                                                    [nonces:protected] => Array
                                                        (
                                                        )

                                                    [styleNonce:protected] => 
                                                    [scriptNonce:protected] => 
                                                    [styleNonceTag:protected] => {csp-style-nonce}
                                                    [scriptNonceTag:protected] => {csp-script-nonce}
                                                    [autoNonce:protected] => 1
                                                    [tempHeaders:protected] => Array
                                                        (
                                                        )

                                                    [reportOnlyHeaders:protected] => Array
                                                        (
                                                        )

                                                    [CSPEnabled:protected] => 
                                                )

                                            [cookieStore:protected] => CodeIgniter\Cookie\CookieStore Object
                                                (
                                                    [cookies:protected] => Array
                                                        (
                                                        )

                                                )

                                            [cookiePrefix:protected] => 
                                            [cookieDomain:protected] => 
                                            [cookiePath:protected] => /
                                            [cookieSecure:protected] => 
                                            [cookieHTTPOnly:protected] => 1
                                            [cookieSameSite:protected] => Lax
                                            [cookies:protected] => Array
                                                (
                                                )

                                            [bodyFormat:protected] => html
                                        )

                                    [logger:protected] => CodeIgniter\Log\Logger Object
                                        (
                                            [logLevels:protected] => Array
                                                (
                                                    [emergency] => 1
                                                    [alert] => 2
                                                    [critical] => 3
                                                    [error] => 4
                                                    [warning] => 5
                                                    [notice] => 6
                                                    [info] => 7
                                                    [debug] => 8
                                                )

                                            [loggableLevels:protected] => Array
                                                (
                                                    [0] => emergency
                                                    [1] => alert
                                                    [2] => critical
                                                    [3] => error
                                                    [4] => warning
                                                    [5] => notice
                                                    [6] => info
                                                    [7] => debug
                                                    [8] => 
                                                )

                                            [filePermissions:protected] => 420
                                            [dateFormat:protected] => Y-m-d H:i:s
                                            [fileExt:protected] => 
                                            [handlers:protected] => Array
                                                (
                                                )

                                            [handlerConfig:protected] => Array
                                                (
                                                    [CodeIgniter\Log\Handlers\FileHandler] => Array
                                                        (
                                                            [handles] => Array
                                                                (
                                                                    [0] => critical
                                                                    [1] => alert
                                                                    [2] => emergency
                                                                    [3] => debug
                                                                    [4] => error
                                                                    [5] => info
                                                                    [6] => notice
                                                                    [7] => warning
                                                                )

                                                            [fileExtension] => 
                                                            [filePermissions] => 420
                                                            [path] => 
                                                        )

                                                )

                                            [logCache] => Array
                                                (
                                                )

                                            [cacheLogs:protected] => 1
                                        )

                                    [forceHTTPS:protected] => 0
                                    [validator:protected] => 
                                )

                        )

                )

            [7] => Array
                (
                    [file] => C:\laragon\www\clima\vendor\codeigniter4\framework\system\CodeIgniter.php
                    [line] => 366
                    [function] => handleRequest
                    [class] => CodeIgniter\CodeIgniter
                    [type] => ->
                    [args] => Array
                        (
                            [0] => 
                            [1] => Config\Cache Object
                                (
                                    [handler] => file
                                    [backupHandler] => dummy
                                    [storePath] => C:\laragon\www\clima\writable\cache/
                                    [cacheQueryString] => 
                                    [prefix] => 
                                    [ttl] => 60
                                    [reservedCharacters] => {}()/\@:
                                    [file] => Array
                                        (
                                            [storePath] => C:\laragon\www\clima\writable\cache/
                                            [mode] => 416
                                        )

                                    [memcached] => Array
                                        (
                                            [host] => 127.0.0.1
                                            [port] => 11211
                                            [weight] => 1
                                            [raw] => 
                                        )

                                    [redis] => Array
                                        (
                                            [host] => 127.0.0.1
                                            [password] => 
                                            [port] => 6379
                                            [timeout] => 0
                                            [database] => 0
                                        )

                                    [validHandlers] => Array
                                        (
                                            [dummy] => CodeIgniter\Cache\Handlers\DummyHandler
                                            [file] => CodeIgniter\Cache\Handlers\FileHandler
                                            [memcached] => CodeIgniter\Cache\Handlers\MemcachedHandler
                                            [predis] => CodeIgniter\Cache\Handlers\PredisHandler
                                            [redis] => CodeIgniter\Cache\Handlers\RedisHandler
                                            [wincache] => CodeIgniter\Cache\Handlers\WincacheHandler
                                        )

                                )

                            [2] => 
                        )

                )

            [8] => Array
                (
                    [file] => C:\laragon\www\clima\public\index.php
                    [line] => 67
                    [function] => run
                    [class] => CodeIgniter\CodeIgniter
                    [type] => ->
                    [args] => Array
                        (
                        )

                )

        )

    [previous:Exception:private] => 
)