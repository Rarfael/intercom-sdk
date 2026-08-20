import { Context } from './Context';
declare class IntercomError extends Error {
    isIntercomError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { IntercomError };
