// alert('js is runing')

/* ============= Table parent section ============= */ 

const section = document.querySelector('.main-section')
const sectionCls = 'w-full flex flex-col justify-center items-center h-4/5' 

sectionCls.split(' ').forEach(cls => {
  section.classList.add(cls)
})  

/* =============  Section odd child ============= */ 

const mytop = document.querySelector('.addSection')
const topCls = 'w-full xl:w-9/12 my-2 px-3 py-2 flex justify-between items-center rounded-lg' 

topCls.split(' ').forEach(cls => {
  mytop.classList.add(cls)
})  

// odd child h1

const topH1 = document.querySelector('.top-h1')
const topH1Cls = 'text-xl font-medium text-teal-100' 

topH1Cls.split(' ').forEach(cls => {
  topH1.classList.add(cls)
})  

// odd child button

const topBtn = document.querySelector('.top-button')
const topBtnCls = 'bg-blue-400 p-2 rounded font-medium text-gray-100' 

topBtnCls.split(' ').forEach(cls => {
  topBtn.classList.add(cls)
})  

/* =============  Section even child ============= */ 

const bottom = document.querySelector('.my-bottom')
const bottomCls = 'w-full xl:w-9/12 overflow-auto mx-6 rounded-lg table-shadow' 

bottomCls.split(' ').forEach(cls => {
  bottom.classList.add(cls)
})  

// even child table th-1

const th1 = document.querySelector('.th-1')
const th1Cls = 'text-sm font-medium text-gray-400 px-6 py-4 text-left' 

th1Cls.split(' ').forEach(cls => {
  th1.classList.add(cls)
}) 

// even child table ths

const ths = document.querySelectorAll('.ths')
const thsCls = 'text-sm font-medium text-gray-400 px-6 py-4 text-left whitespace-nowrap'

ths.forEach(th => {
  thsCls.split(' ').forEach(cls => {
    th.classList.add(cls)
  })
})

// even child table last th

const lastTh = document.querySelector('.last-th')
const lastThCls = 'text-sm text-center font-medium text-gray-400 px-6 py-4 whitespace-nowrap' 

lastThCls.split(' ').forEach(cls => {
  lastTh.classList.add(cls)
}) 

// even child table first td

const firstTd = document.querySelectorAll('.td-1')
const firstTdCls = 'px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-200'  

firstTd.forEach(tdOne => {
  firstTdCls.split(' ').forEach(cls => {
    tdOne.classList.add(cls)
  }) 
})
// even child table tds

const tds = document.querySelectorAll('.tds')
const tdsCls = 'text-sm text-gray-200 px-6 py-4 whitespace-nowrap'

tds.forEach(td => {
  tdsCls.split(' ').forEach(cls => {
    td.classList.add(cls)
  })
})

// even child table td actions

const tdActions = document.querySelectorAll('.tdLinks')
const tdActionsCls = 'flex justify-around w-full'

tdActions.forEach(tdAction => {
  tdActionsCls.split(' ').forEach(cls => {
    tdAction.classList.add(cls)
  }) 
})

// even child table td actions --> links

const actions = document.querySelectorAll('.ediel')
const actionsCls = 'text-base text-blue-300 cursor-pointer p-2 m-2 whitespace-nowrap'

actions.forEach(action => {
  actionsCls.split(' ').forEach(cls => {
    action.classList.add(cls)
  })
})
