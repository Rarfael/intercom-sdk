
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { IntercomSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await IntercomSDK.test()
    equal(null !== testsdk, true)
  })

})
