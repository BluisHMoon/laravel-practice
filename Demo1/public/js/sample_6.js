       var options = [{
            option: "關於我們",
            link: "about_us",
            dropdowm: "false",

        }, {
            option: "最新消息",
            link: "news",
            dropdowm: "false",
        }, {
            option: "服務項目",
            link: "service",
            dropdowm: "true",
            toggle: "dropdown",
            dropdowmOptions: [{
                item: "項目_1",
                link: "service_page"
            }, {
                item: "項目_2",
                link: "service_page"
            }, {
                item: "項目_3",
                link: "service_page"
            }]


        }, {
            option: "聯絡我們",
            link: "contact",
            dropdowm: "false",
        }]

        var companyDetail = {
            phone: "070-1000-2650",
            address:"41247 台中市大里區華城街22號",
            mail:"service@cystudio.com.tw",
            logo: "images/logo.svg",
            options: options
        }

        var navbar = new Vue({
            el: "#navbar",
            data: companyDetail
        })

          var footer = new Vue({
            el: "#footer",
            data: companyDetail
        })



        var container = new Vue({
            el: ".container",
            data: companyDetail
        })


        $(window).scroll(function(evt) {
            if ($(window).scrollTop() > 0)
                $(".navbar").css("height", "55px");
            else
                $(".navbar").css("height", "70px");
        });
