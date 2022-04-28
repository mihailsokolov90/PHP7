/*
 * @descr - Main JS Entry Point
 */

class JSMain
{
    console = undefined;
    buffer = "";
    query_params = {};

    constructor(console) {
        this.console = console;

        const base = this;
        let search_submit = document.getElementById("header_nav_form_submit");

        search_submit.addEventListener('click', function (e)
        {
            e.preventDefault();
            base.collectQueryParams();
            base.countOfElements();
        });
    }

    main()
    {
        if( this.console === undefined ) {
            alert("No IO device");
            return false;
        }

        this.buffer += 'Running application...<br/>\n';
        this.console.innerHTML = this.buffer;

        return true;
    }

    writeLine(str)
    {
        this.buffer += str + '<br/>\n';
        this.console.innerHTML = this.buffer;
    }

    collectQueryParams()
    {
        this.query_params = new Proxy(new URLSearchParams(window.location.search.substring(1)), {
            get: (params, prop) => params.get(prop),
        })
    }

    countOfElements()
    {
        const elem = document.getElementById("header_nav_form_search").value;
        if( elem === null || elem === undefined ) {
            this.writeLine("Elements " + elem + "& not find!");
            return false;
        }

        const elements = document.querySelectorAll(elem);
        if( elements.length <= 0 ) {
            this.writeLine("Elements " + elem + "& not find!");
            return false;
        }

        this.writeLine("Count of elements " + elem + ": " + list_row.length);
    }
}

$(document).ready(function()
{
    let c = document.getElementById("main_console");
    let js = new JSMain(c);
    //js.writeLine("Running...");
})