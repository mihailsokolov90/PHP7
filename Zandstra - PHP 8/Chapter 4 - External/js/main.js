/**
 * @author Michael
 * @class Program
 */

class Application
{
    constructor()
    {
        console.log("App running...");

        this.m_date = new Date();
    }

    exec()
    {
        console.log("Created: " + this.m_date.toString());
    }

    writeLine(str = "")
    {
        console.log(str);
    }

    m_date = null;
    m_console = null;
}

/* Main */
$(function () {
    app = new Application();
    app.exec();
});