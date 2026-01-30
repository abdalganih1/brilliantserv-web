@echo off
echo Starting Deployment of Pilot Article...
echo Host: 76.13.12.6
echo User: u571469569
echo.
echo Uploading Artice...
scp -P 65002 blog/water-pump-technician-riyadh.html u571469569@76.13.12.6:domains/brilliantserv.com/public_html/blog/
echo.
echo Uploading Image...
scp -P 65002 media/blog/water_pump_technician_riyadh.webp u571469569@76.13.12.6:domains/brilliantserv.com/public_html/media/blog/
echo.
echo Uploading Updated Pages...
scp -P 65002 blog.html u571469569@76.13.12.6:domains/brilliantserv.com/public_html/
scp -P 65002 llm.txt u571469569@76.13.12.6:domains/brilliantserv.com/public_html/
scp -P 65002 sitemap.xml u571469569@76.13.12.6:domains/brilliantserv.com/public_html/
echo.
echo Deployment Finished!
pause
