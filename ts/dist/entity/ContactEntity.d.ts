import { IntercomEntityBase } from '../IntercomEntityBase';
import type { IntercomSDK } from '../IntercomSDK';
import type { Control } from '../types';
import type { Contact, ContactLoadMatch, ContactListMatch, ContactCreateData, ContactUpdateData, ContactRemoveMatch } from '../IntercomTypes';
declare class ContactEntity extends IntercomEntityBase<Contact> {
    constructor(client: IntercomSDK, entopts: any);
    make(this: ContactEntity): ContactEntity;
    load(this: any, reqmatch?: ContactLoadMatch, ctrl?: Control): Promise<ContactEntity>;
    list(this: any, reqmatch?: ContactListMatch, ctrl?: Control): Promise<ContactEntity[]>;
    create(this: any, reqdata?: ContactCreateData, ctrl?: Control): Promise<ContactEntity>;
    update(this: any, reqdata?: ContactUpdateData, ctrl?: Control): Promise<ContactEntity>;
    remove(this: any, reqmatch?: ContactRemoveMatch, ctrl?: Control): Promise<ContactEntity>;
}
export { ContactEntity };
