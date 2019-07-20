from selenium import webdriver
from selenium.webdriver.common.by import By 
from selenium.webdriver.support.ui import WebDriverWait 
from selenium.webdriver.support import expected_conditions as EC 
from selenium.common.exceptions import TimeoutException

path = '/usr/bin/chromedriver'
browser = webdriver.Chrome(path)
browser.get("http://www.icndb.com/the-jokes-2/") 

# Wait 20 seconds for page to load
timeout = 20
try:
    WebDriverWait(browser, timeout).until(EC.visibility_of_element_located((By.XPATH, '//table[@class="chuck-norris-jokes-table"]')))
except TimeoutException:
    print('Timed out waiting for page to load')
    browser.quit()

# find_elements_by_xpath returns an array of selenium objects.
tables_element = browser.find_elements_by_xpath('//table[@class="chuck-norris-jokes-table"]')
# use list comprehension to get the actual repo titles and not the selenium objects.
tables = [x.text for x in tables_element]
# print out all the titles.
print('tables:')
print(tables, '\n')