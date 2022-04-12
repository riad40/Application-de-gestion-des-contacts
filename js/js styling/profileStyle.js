// alert('js khdama')

/* ============= wrraper section ============= */

const wrapper = document.querySelector('.wrapper')
const wrapperCls = 'flex justify-center items-center h-4/5 md:h-2/4'

wrapperCls.split(' ').forEach(cls => {
    wrapper.classList.add(cls)
})

/* ============= wrraper child ============= */

const wrapperChild = document.querySelector('.wrapper-child')
const wrapperChildCls = 'flex flex-col md:flex-row w-full mx-5 xl:mx-0 xl:w-2/4'

wrapperChildCls.split(' ').forEach(cls => {
    wrapperChild.classList.add(cls)
})

/* ============= left ============= */

const left = document.querySelector('.left')
const leftCls = 'w-full md:w-2/5 px-4 py-9 text-center rounded-tl rounded-bl'

leftCls.split(' ').forEach(cls => {
    left.classList.add(cls)
})

// left h4 

const leftH4 = document.querySelector('.left-h4')
const leftH4Cls = 'mb-4 text-gray-300 font-medium text-xl'

leftH4Cls.split(' ').forEach(cls => {
    leftH4.classList.add(cls)
})

// left p

const leftPara = document.querySelector('.left-para')
const leftParaCls = 'text-xl font-bold text-gray-200 tracking-widest'

leftParaCls.split(' ').forEach(cls => {
    leftPara.classList.add(cls)
})

/* ============= right ============= */

const right = document.querySelector('.right')
const rightCls = 'w-full md:w-3/5 px-7 py-5 rounded-tr rounded-br'

rightCls.split(' ').forEach(cls => {
    right.classList.add(cls)
})

// right h3

const rightH3 = document.querySelector('.right-h3')
const rightH3Cls = 'mb-4 pb-2 text-gray-700 text-2xl font-medium uppercase tracking-widest'

rightH3Cls.split(' ').forEach(cls => {
    rightH3.classList.add(cls)
})

// right info data

const infoData = document.querySelectorAll('.info_data')
const infoDataCls = 'flex justify-between overflow-auto'

infoData.forEach(info => {
    infoDataCls.split(' ').forEach(cls => {
        info.classList.add(cls)
    })
})

// right data

const data = document.querySelectorAll('.data')
const dataCls = 'w-2/4'

data.forEach(info => {
    dataCls.split(' ').forEach(cls => {
        info.classList.add(cls)
    })
})

// right data title

const dataTitle = document.querySelectorAll('.data_title')
const dataTitleCls = 'mb-3 text-xl font-bold'

dataTitle.forEach(info => {
    dataTitleCls.split(' ').forEach(cls => {
        info.classList.add(cls)
    })
})  

// right data answer

const dataAnswer = document.querySelectorAll('.data_answer')
const dataAnswerCls = 'mb-3 text-sm font-medium whitespace-nowrap'

dataAnswer.forEach(info => {
    dataAnswerCls.split(' ').forEach(cls => {
        info.classList.add(cls)
    })
})  