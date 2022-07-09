const firstName= document.getElementById('FirstName')
const lastName = document.getElementById('LastName')
const nrc = document.getElementById('nrc')
const dob = document.getElementById('dob')
const country  = document.getElementById('Country')
const province  = document.getElementById('Province')
const town = document.getElementById('Town')
const street = document.getElementById('Street')
const area  = document.getElementById('Area')
const sex = document.getElementById('sex')
const client = document.getElementById('Client')
const nameofBank = document.getElementById('NameofBank')
const bankAccountNo = document.getElementById('BankAccountNo')
const branchofBank = document.getElementById('BranchofBank')
const phoneNumber = document.getElementById('PhoneNumber')
const email = document.getElementById('Email')



const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (firstName.value === '' || firstName.value == null) {
    messages.push('First name is required')
  }

  if (lastName .value === '' || lastName .value == null) {
    messages.push('last name is required')
  }

  if (nrc.value === '' || nrc.value == null) {
    messages.push('NRC details is required')
  }


  if (dob.value === '' || dob.value == null) {
    messages.push('Date of birth is required')
  }

  if (country.value === 'undefined' || country.value == null) {
    messages.push('Country is required')
  }

  if (province .value === 'undefined' || province .value == null) {
    messages.push('Province is required')
  }

  if (town.value === 'undefined' || town.value == null) {
    messages.push('Town is required')
  }

  if (street .value === 'undefined' ||street .value == null) {
    messages.push('Street  is required')
  }


  if (area.value === '' || area.value == null) {
    messages.push('Area is required')
  }
  if (sex.value === '' || sex.value == null) {
    messages.push('Sex is required')
  }
  if (client.value === '' || client.value == null) {
    messages.push('Client is required')
  }
  if (nameofBank.value === '' || nameofBank.value == null) {
    messages.push('Name of the bank is required')
  }

  if (bankAccountNo === '' || bankAccountNo.value == null) {
    messages.push('Bank account number is required')
  }

  if (branchofBank.value === '' || branchofBank.value == null) {
    messages.push('Branch of the bank is required')
  }
  if (phoneNumber.value.length < 13) {
    messages.push('Phone must be at least than 10 characters')
  }
  if (email.value === '' || email.value == null) {
    messages.push('email is required')
  }
  
})